<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ContactController::class, 'index']);
Route::post('/contact/create', [ContactController::class, 'create']);
