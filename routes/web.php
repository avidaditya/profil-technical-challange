<?php

use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\LandingController;
use App\Http\Controllers\frontend\LokasiController;
use App\Http\Controllers\UploadController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Counter
Route::get('/counter/ideas', [LandingController::class, 'counter'])->name('counter.ideas');

// CKEditor Upload
Route::post('/ckeditor/upload', [UploadController::class, 'ckeditorUpload'])->name('ckeditor.upload');

// Authentication
Route::middleware('guest')->group(function () {
    Route::get('/admin-login', [App\Http\Controllers\AuthController::class, 'adminLogin'])->name('admin-login');
    Route::post('/admin-login', [App\Http\Controllers\AuthController::class, 'adminLoginAttempt'])->name('admin-login.attempt');

    Route::get('/forgot-password', [App\Http\Controllers\AuthController::class, 'forgotPassword'])->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\AuthController::class, 'forgotPasswordSubmit'])->name('password.email');

    Route::get('/reset-password/{token}', [App\Http\Controllers\AuthController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [App\Http\Controllers\AuthController::class, 'passwordResetSubmit'])->name('password.update');

    Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerMember'])->name('register');
});

Route::post('/member-login', [App\Http\Controllers\AuthController::class, 'memberLoginAttempt'])->name('member-login.attempt');
Route::post('/ubah-profile', [App\Http\Controllers\AuthController::class, 'ubahProfile'])->name('member-login.ubah');

// Email Verification
Route::get('/email/verify', function () {
    abort(404);
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\AuthController::class, 'verifyEmailVerication'])->name('verification.verify');

// OAUTH
Route::get('/auth/{provider}', [App\Http\Controllers\AuthController::class, 'redirectToProvider'])->name('auth.sso');
Route::get('/auth/{provider}/callback', [App\Http\Controllers\AuthController::class, 'handleProviderCallback'])->name('auth.sso.callback');

Route::post('/complete-data', [App\Http\Controllers\AuthController::class, 'completeData'])->name('complete-data');
