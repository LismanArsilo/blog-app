<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
  Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
  Route::post('/login', [AuthController::class, 'apiLogin'])->name('api.login');
});

Route::middleware(['auth'])->group(function () {
  Route::post('/logout', [AuthController::class, 'apiLogout'])->name('api.logout');

  Route::get('/article', [ArticleController::class, 'index'])->name('view.article');
  Route::get('/article/{id}', [ArticleController::class, 'viewDetail'])->name('article.show');

  Route::get('/news', [NewsController::class, 'index'])->name('view.news');
});
