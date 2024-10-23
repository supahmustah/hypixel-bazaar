<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuctionService
{
    public function getAuctionData()
    {
        $response = Http::get('https://api.hypixel.net/v2/skyblock/auctions');

        if ($response->successful()) {
            $auctions = $response->json()['auctions'];

            $currentTime = time();
            $auctions = array_filter($auctions, function ($auction) use ($currentTime) {
                return $auction['end'] > $currentTime;
            });

            usort($auctions, function ($a, $b) {
                return count($b['bids']) - count($a['bids']);
            });

            return array_slice($auctions, 0, 16);
        } else {
            Log::error('Failed to retrieve data from the API: '.$response->status());

            return null;
        }
    }
}
