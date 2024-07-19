<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* route untuk category */
Route::get( "/category", [CategoryController::class, "index"]);
Route::get( "/category/create", [CategoryController::class, "create"]);
Route::post("/category/store", [CategoryController::class, "store"]);
Route::get("/category/edit/{id}", [CategoryController::class, "edit"]);
Route::put("/category/update/{id}", [CategoryController::class, "update"]);
Route::delete("/category/{id}", [CategoryController::class, "destory"]);


/* route untuk dashboard */
Route::get( "/dashboard", [DashboardController::class, "index"]);
