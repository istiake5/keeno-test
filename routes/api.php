<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/category', 'CategoryController');
Route::apiResource('/product', 'ProductController');

Route::get('/features', 'ProductController@featuredProduct');



