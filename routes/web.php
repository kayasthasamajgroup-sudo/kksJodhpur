<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ENewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MatrimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\LocaleMiddleware;
use App\Models\Matrimonial;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\App;
Route::middleware('SetLang')->group(function(){
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/members', [MemberController::class, 'index'])->name('membership.index');

Route::get('/membership', [MemberController::class, 'showForm']);
Route::post('/membership', [MemberController::class, 'store'])->name('membership.store');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('membership.show');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}/participate', [EventController::class, 'participateForm'])->name('event.participate.form');
Route::post('/events/participate', [EventController::class, 'participateSubmit'])->name('event.participate');


// Route::get('/lang/{locale}', function($locale){
//     if(in_array($locale, ['en','hi'])){
//         session(['locale' => $locale]); // Session me store
//     }
//     return redirect()->back(); // Pichle page par redirect
// })->name('lang.switch');


// Example route group with middleware applied directly
Route::middleware([LocaleMiddleware::class])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);
});

Route::post('send-mail', [ContactController::class,'sendEmail']);
Route::view('/contact-us','contact');
Route::get('/ENews', [ENewsController::class, 'index'])->name('news.index');  // All News
Route::get('/ENews/{news}', [ENewsController::class, 'singleNews'])->name('single.news');  // Single News

Route::get('/matrimonial', [MatrimonialController::class, 'create']); // show the form
Route::post('/matrimonial', [MatrimonialController::class, 'store'])->name('matrimonial.store'); // submit the form

Route::get('/matrimonial-members', [MatrimonialController::class, 'index'])->name('matrimonial.index');
Route::get('/matrimonial-members/{id}', [MatrimonialController::class, 'show'])->name('matrimonial.show');
Route::get('/stuti-arti', function () {
    return view('stuti-arti');
});


    Route::get('/terms-and-conditions', function () {
        return view('terms-and-conditions');
    });
    Route::get('/privacy-policy', function () {
        return view('privacy-policy');
    });


Route::post('send-interest', [MatrimonialController::class,'sendInterest'])->name('send-interest');


Route::get('/committees/{committee?}', [CommitteeController::class,'index'])->name('committees.index');


Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['hi', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');


Route::get('/business-form', [BusinessController::class, 'create'])->name('business.create');
Route::post('/business/store', [BusinessController::class, 'store'])->name('business.store');
Route::get('/active-businesses', [BusinessController::class, 'active'])->name('business.active');
});