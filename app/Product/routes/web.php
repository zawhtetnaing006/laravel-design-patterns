<?php

use App\Product\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products',[ProductController::class,'findMany']);
