<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;

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
    return view('landing');
});

Route::get('/allPosts', [PostController::class, 'index']);
Route::get('/allArticles', [ArticleController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/userPosts', [PostController::class, 'userPosts'])->name('user.posts');
    Route::get('/userArticles', [ArticleController::class, 'userArticles'])->name('user.articles');

    Route::post('/posts/update', [PostController::class, 'update'])->name('post.update');
    Route::resource('/posts', PostController::class);
    Route::post('/articles/update', [ArticleController::class, 'update'])->name('article.update');
    Route::resource('/articles', ArticleController::class);
});

require __DIR__.'/auth.php';
