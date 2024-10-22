<?php

namespace App\Http\Controllers;

use App\Services\BazaarService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected BazaarService $bazaarService) {}

    public function index(Request $request)
    {
        $result = $this->bazaarService->getApiDataAndCalculations(7, $request->input('page'));
        $items = $result['items'];
        $apiData = $result['apiData'];

        return view('home', compact('items', 'apiData'));
    }
}
