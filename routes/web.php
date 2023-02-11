<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/galeria', [GalleryController::class, 'getGallery']);

Route::post('/galeria', [GalleryController::class, 'upload']);

Route::get('/galeria/g={id}', [ImageController::class, 'start']);

Route::post('/galeria/g={id}', [ImageController::class, 'upload']);