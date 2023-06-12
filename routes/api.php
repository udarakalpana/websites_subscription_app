<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Websites\WebsitesController;
use App\Http\Controllers\Websites\WebsitesSubscribeController;
use App\Http\Controllers\Posts\PostsController;

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

Route::middleware(['auth:sanctum'])->group(function (){
    Route::controller(WebsitesController::class)->group(function (){
        Route::get('/website', 'show')->name('website.show');
    });

    Route::controller(WebsitesSubscribeController::class)->group(function (){
        Route::post('/subscribe', 'subscribe')->name('website.subscribe');
    });

    Route::controller(PostsController::class)->group(function (){
        Route::post('/post', 'create')->name('post.create');
    });
});
