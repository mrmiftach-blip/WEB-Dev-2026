<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return redirect()->route('articles.index');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::put('/articles/{slug}/comments/{comment}', [CommentController::class, 'update'])
    ->name('comments.update');
Route::delete('/articles/{slug}/comments/{comment}', [CommentController::class, 'destroy'])
    ->name('comments.destroy');
