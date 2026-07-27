<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/expertise', [PageController::class, 'platform'])->name('expertise');
Route::get('/strategy', [PageController::class, 'strategy'])->name('strategy');
Route::get('/why-meem', [PageController::class, 'whyMeem'])->name('why-meem');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
// Route::get('/robots.txt', [PageController::class, 'robots'])->name('robots');
