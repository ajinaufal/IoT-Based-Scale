<?php

use App\Http\Controllers\api\sanitizer;
use App\Http\Controllers\api\scale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('volume', [sanitizer::class, 'create_data']);
Route::post('scales', [scale::class, 'scale']);
