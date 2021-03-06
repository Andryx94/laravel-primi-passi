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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/faq', function () {

    $faqBefore = config('faqs.before');
    $faqAfter = config('faqs.after');
    return view('faq', [
      'faq_before' => $faqBefore,
      'faq_after' => $faqAfter,      
    ]);
})->name('faq');
