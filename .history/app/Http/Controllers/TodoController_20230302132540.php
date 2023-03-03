<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TController;

Route::get('/test', [TestController::class, 'index']);
