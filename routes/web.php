<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact_us_index'])->name('contact_us');
Route::get('/about-us', [HomeController::class, 'about_us_index'])->name('about_us');

Route::get('/services', [HomeController::class, 'services_index'])->name('services');
Route::get('/services/consulting', [HomeController::class, 'services_1_index'])->name('services_1');
Route::get('/services/technology', [HomeController::class, 'services_2_index'])->name('services_2');
Route::get('/services/operations-support', [HomeController::class, 'services_3_index'])->name('services_3');

Route::get('/industries', [HomeController::class, 'industries_index'])->name('industries');
Route::get('/industries/energy-&-utilities', [HomeController::class, 'industries_1_index'])->name('industries_1');
Route::get('/industries/manufacturing-&-supply-chain', [HomeController::class, 'industries_2_index'])->name('industries_2');
Route::get('/industries/capital-projects-&-infrastructure', [HomeController::class, 'industries_3_index'])->name('industries_3');
Route::get('/industries/other-industries', [HomeController::class, 'industries_4_index'])->name('industries_4');


Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact_us.submit');
