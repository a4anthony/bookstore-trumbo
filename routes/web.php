<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [App\Http\Controllers\BookController::class, "index"])->name(
    "books.index"
);

Route::get("/create", [
    App\Http\Controllers\BookController::class,
    "create",
])->name("books.create");

Route::post("/create", [
    App\Http\Controllers\BookController::class,
    "store",
])->name("books.store");

Route::get("/book/{bookId}", [
    App\Http\Controllers\BookController::class,
    "edit",
])->name("books.edit");

Route::put("", [App\Http\Controllers\BookController::class, "update"])->name(
    "books.update"
);

Route::get("/delete-confirmation/{bookId}", [
    App\Http\Controllers\BookController::class,
    "deleteConfirmation",
])->name("books.delete-confirmation");

Route::delete("", [
    App\Http\Controllers\BookController::class,
    "destroy",
])->name("books.destroy");
