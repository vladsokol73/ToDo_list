<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

//Домой
Route::get('/', HomeController::class)->name("home");

//Аутентификация
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', "register")->name("register");
    Route::post('/register', "registerSubmit")->name("registerSubmit");

    Route::get('/login', "login")->name("login");
    Route::post('/login', "loginSubmit")->name("loginSubmit");

    Route::post("/logout", "logOut")->name("logout");
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/profile', 'show')->name('profile');
    Route::get('/task-add', 'addTask')->name('addTask');
    Route::post('/task-save', 'saveTask')->name('saveTask');
    Route::post('/remove-task/{id}', 'removeTask')->name('removeTask');
});
