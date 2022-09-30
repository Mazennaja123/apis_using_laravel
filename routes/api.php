<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\algorithm_controller;

Route::get("/algorithms/sort_string/{unsorted_string}",[algorithm_controller::class,'get_sorted_string']);
Route::get("/algorithms/number_place/{number}",[algorithm_controller::class,'place_number_value']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
