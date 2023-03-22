<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

Route::resource('infor', InforController::class);
Route::resource('collections', CollectionController::class);
Route::resource('tags', TagController::class);
Route::resource('image-details', ImageController::class);
Route::post('upload-image', [InforController::class, 'uploadImage']);
