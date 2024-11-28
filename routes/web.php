<?php

use App\Http\Controllers\ecommerceController;
use Illuminate\Support\Facades\Route;

//? Rotte Home
Route::get('/', [ecommerceController::class, 'homepage'])->name('homepage');

Route::get('/articolo', [ecommerceController::class, 'showArticles'])->name('articles');
Route::get('/articolo/{id}', [ecommerceController::class, 'show'])->name('detail');


//? rotte about
Route::get('/about-us', [ecommerceController::class, 'aboutindex'])->name('about-us');
Route::post('/contatti/invio', [ecommerceController::class, 'invioContatto'])->name('contatto.invio');