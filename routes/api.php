<?php

use App\Http\Controllers\Api\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get("reviews", [ReviewController::class, "index"]);
Route::get("reviews/{review}", [ReviewController::class, "show"]);
