<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GalleryController;

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

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/sub-categories/{slug}', [CategoriesController::class, 'subCategories']);
Route::get('/category-images/{slug}', [CategoriesController::class, 'getImages']);
Route::get('/recents', [GalleryController::class, 'recents']);
