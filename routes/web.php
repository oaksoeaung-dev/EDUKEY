<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get("/",[ApplicationController::class,"home"])->name("home");
Route::get("/about",[ApplicationController::class,"about"])->name("about");
Route::get("/contact",[ApplicationController::class,"contact"])->name("contact");
Route::get("/courses",[ApplicationController::class,"courses"])->name("courses");
Route::get("/news",[ApplicationController::class,"news"])->name("news");
