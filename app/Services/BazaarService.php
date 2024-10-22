<?php

namespace App\Services;

use App\Models\Item;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BazaarService
{
    protected function getApiData()
    {
        $response = Http::get('https://api.hypixel.net/v2/skyblock/bazaar');

        if ($response->successful()) {
            return $response->json()['products'];
        } else {
            Log::error('Failed to retrieve data from the API: '.$response->status());

            return null;
        }
    }

    protected function calculateItemData($items, $apiData)
    {
        if (! $apiData) {
            return collect();
        }

        return $items->map(function ($item) use ($apiData) {
            $sellPrice = $apiData[$item->apiName]['quick_status']['sellPrice'] ?? 0;

            $totalBuyPrice = $item->craftingItems->sum(function ($craftingItem) use ($apiData) {
                $buyPrice = $apiData[$craftingItem->apiName]['quick_status']['buyPrice'] ?? 0;

                return $buyPrice * $craftingItem->pivot->quantity;
            });

            $margin = $sellPrice - $totalBuyPrice;

            return [
                'id' => $item->id,
                'item' => $item,
                'sellPrice' => round($sellPrice, 2),
                'totalBuyPrice' => round($totalBuyPrice, 2),
                'margin' => round($margin, 2),
            ];
        })->sortByDesc('margin')->values();
    }

    public function calculateSingleItemData($itemName)
    {
        $apiData = $this->getApiData();
        $item = Item::where('apiName', $itemName)->first();

        $sellPrice = $apiData[$item->apiName]['quick_status']['sellPrice'] ?? 0;

        $totalBuyPrice = $item->craftingItems->sum(function ($craftingItem) use ($apiData) {
            $buyPrice = $apiData[$craftingItem->apiName]['quick_status']['buyPrice'] ?? 0;

            return $buyPrice * $craftingItem->pivot->quantity;
        });

        $margin = $sellPrice - $totalBuyPrice;

        return [
            'id' => $item->id,
            'item' => $item,
            'sellPrice' => round($sellPrice, 2),
            'totalBuyPrice' => round($totalBuyPrice, 2),
            'margin' => round($margin, 2),
        ];
    }

    public function getApiDataAndCalculations($perPage = 7, $page = null)
    {
        $items = Item::whereNotNull('duration')->get();

        $apiData = $this->getApiData();
        $calculatedItems = $this->calculateItemData($items, $apiData);

        // Apply pagination to the calculated items
        $paginatedItems = $this->paginateCollection($calculatedItems, $perPage, $page);

        return ['items' => $paginatedItems, 'apiData' => $apiData];
    }

    protected function paginateCollection(Collection $collection, $perPage, $page = null)
    {
        $page = $page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);
        $items = $collection->forPage($page, $perPage);

        return new LengthAwarePaginator(
            $items,
            $collection->count(),
            $perPage,
            $page,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
    }
}
