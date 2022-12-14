<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\HotelController;
use App\Http\Controllers\api\PlaceController;
use App\Http\Controllers\api\AuthenticationController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource("/hotels", HotelController::class);

Route::apiresource("/places", PlaceController::class);

Route::post("/register", [AuthenticationController::class, "createUser"]);

Route::post("/signin", [AuthenticationController::class, "signin"]);




