<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/* WEBSITE - FRONT */
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/approach', [FrontController::class, 'approach'])->name('front.approach');
Route::get('/expertise', [FrontController::class, 'expertise'])->name('front.expertise');
Route::get('/clients', [FrontController::class, 'clients'])->name('front.clients');
Route::get('/services', [FrontController::class, 'services'])->name('front.services');
Route::get('/services/marketing', [FrontController::class, 'servicesmarketing'])->name('front.services.marketing');
Route::get('/services/pr', [FrontController::class, 'servicespr'])->name('front.services.pr');
Route::get('/services/experience', [FrontController::class, 'servicesexperience'])->name('front.services.experience');
Route::get('/services/btl', [FrontController::class, 'servicesbtl'])->name('front.services.btl');
Route::get('/services/irm', [FrontController::class, 'servicesirm'])->name('front.services.irm');
Route::get('/services/social', [FrontController::class, 'servicessocial'])->name('front.services.social');
Route::get('/services/content', [FrontController::class, 'servicescontent'])->name('front.services.content');
Route::get('/services/branding', [FrontController::class, 'servicesbranding'])->name('front.services.branding');
Route::get('/team', [FrontController::class, 'team'])->name('front.team');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
