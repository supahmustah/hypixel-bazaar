<?php

namespace App\Http\Controllers;

use App\Services\BazaarService;

abstract class Controller
{
    public function __construct(protected BazaarService $bazaarService) {}
}
