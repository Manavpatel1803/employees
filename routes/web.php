<?php
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
