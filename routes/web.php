<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicationController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('documents/read/{id}', [DocumentController::class, 'read'])->middleware('verified')->name('documents.read');
    Route::resource('documents', DocumentController::class);
    Route::resource('publications', PublicationController::class);
});

Route::get('/run', [Controller::class, 'run']);
