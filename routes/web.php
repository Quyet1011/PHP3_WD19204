<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/book/{id}', [BookController::class, 'show'])->name('detail');
Route::get('/category/{id}', [BookController::class, 'list'])->name('list-book');


Route::get('/about', function () {
    return view('about');
});

// Xây dựng đường dẫn có tham số
Route::get('/user/{id}', function ($id) {
    return "<h1>User ID $id</h1>";
});
// Nhiều tham số
Route::get('/user/{id}/comment/{comment_id}', function ($id, $comment_id) {
    return "<h1>User ID: $id; Comment ID: $comment_id</h1>";
});
// Group cho books
Route::prefix('books')->group(function(){
    Route::get('{id}/show', function($id){
        return "Sách $id";
    });

    // Tham số Null
    Route::get('list/{id?}', function($id = null){
        return "Danh sách sách $id";
    });
});
