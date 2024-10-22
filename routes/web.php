<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions');
