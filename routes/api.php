<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::apiResource('/displaynews', App\Http\Controllers\NewsController::class);
    Route::apiResource('/displaybooks', App\Http\Controllers\BooksController::class);
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\NewsController;
// use App\Http\Controllers\BooksController;

// Route::prefix('v1')->group(function () {
//     // Correctly use apiResource for a single resource
//     Route::apiResource('displaynews', NewsController::class);

//     // Use apiResource for each individual resource
//     Route::apiResource('displaybooks', BooksController::class);
// });

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

