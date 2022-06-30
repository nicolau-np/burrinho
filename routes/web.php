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

Route::livewire('/', "home")->name('home')->middleware('auth');

Route::livewire('/about', "about");

Route::livewire('/chat', "user.chat");

Route::group(['prefix' => "user"], function () {
    Route::livewire('/login', "user.login")->name('login')->middleware('guest');
});