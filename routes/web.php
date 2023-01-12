<?php

use App\Http\Controllers\checkController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\registrationController;
use App\Models\register;
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
    return view('home');
});
Route::get('/terms-and-conditions', function () {
    return view('termsAndConditions');
});
Route::get('/privacy-policy', function () {
    return view('privacyPolicy');
});
Route::get('/refund-policy', function () {
    return view('returnAndRefundPolicy');
});

Route::post('/register', [registrationController::class, 'register'])->name('register');
Route::post('/createOrder', [paymentController::class, 'createOrder'])->name('createOrder');
Route::post('/checkOut', [paymentController::class, 'checkout'])->name('checkOut');
Route::post('/emailCheck', [checkController::class, 'emailCheck'])->name('emailCheck');
Route::post('/emailCheckRegistered', [checkController::class, 'emailCheckRegistered'])->name('emailCheckRegistered');


Route::get('/events/code-combat', [eventsController::class, 'codeCombat']);
Route::get('/events/debug', [eventsController::class, 'debug']);
Route::get('/events/gaming', [eventsController::class, 'gaming']);
Route::get('/events/hackathon', [eventsController::class, 'hackathon']);
Route::get('/events/meme-gram', [eventsController::class, 'memeGram']);
Route::get('/events/paper-presentation', [eventsController::class, 'paperPresentation']);
Route::get('/events/natyakshetra', [eventsController::class, 'natyakshetra']);
Route::get('/events/quiz', [eventsController::class, 'quiz']);

Route::get('/welcome', function () {
    return new \App\Mail\welcomeMail();
});
