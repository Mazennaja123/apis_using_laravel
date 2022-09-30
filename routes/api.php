<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\algorithm_controller;

Route::get("/algorithms",[algorithm_controller::class,'get_sorted_string']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
