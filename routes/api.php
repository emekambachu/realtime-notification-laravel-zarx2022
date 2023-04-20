<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test-event', function (Request $request){
    $name = [
      'name' => 'Dexter',
      'email' => 'xeddtech@gmail.com',
      'mobile' => '111111111111',
    ];
    event(new \App\Events\ChatRecieved($name));
});
