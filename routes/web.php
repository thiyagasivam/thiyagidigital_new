<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

use App\Http\Controllers\ContactController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('/home');
});

// Route::get('contact', function () {
//     return view('contact');
// });

Route::get('seo', function () {
    return view('seo');
});

Route::get('about', function () {
    return view('about');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('smm', function () {
    return view('smm');
});

Route::get('sem', function () {
    return view('sem');
});

Route::get('email-marketing', function () {
    return view('email-marketing');
});

Route::get('content-writing', function () {
    return view('content-writing');
});

Route::get('web-development', function () {
    return view('web-development');
});


// Route::get('mailer', function () {
//     return view('mailer');
// });

// Route::get('thankyou', function () {
//     return view('thankyou');
// });


// routes/web.php


// routes/web.php


Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.thankyou2');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
