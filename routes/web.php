<?php
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ChangePassword;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\Requests\UserStoreRequest;
use App\Http\Controllers\Backend\StateStoreRequest;
use App\Http\Controllers\Backend\CityStoreRequest;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\DepartmentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
Route::resource('departments', DepartmentController::class);
Route::post('users/{user}/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.password');
