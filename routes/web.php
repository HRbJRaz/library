<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DirectiveController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\PublicationController;

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
    Route::resource('instructions', InstructionController::class);
    Route::resource('directives', DirectiveController::class);
});

Route::get('/run', [Controller::class, 'run']);
