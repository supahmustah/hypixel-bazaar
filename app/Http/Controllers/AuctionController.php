<?php

namespace App\Http\Controllers;

use App\Services\AuctionService;

class AuctionController extends Controller
{
    public function __construct(protected AuctionService $auctionService) {}

    public function index()
    {
        $auctionData = $this->auctionService->getAuctionData();

        return view('auction', compact('auctionData'));
    }
}
