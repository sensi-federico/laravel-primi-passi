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

Route::get('/', function () {

    $data = [
        'title' => 'Hello World!'
    ];

    return view('home', $data);
})->name('home');

// About's route
Route::get('about', function () {
    $data = [
        'title' => 'About',
        'text' => 'Lorem ipsum dolor sit amet'
    ];

    return view('about', $data);
})->name('about');

// Skill's route
Route::get('skills', function () {
    $data = [
        'title' => 'My Skills',
        'text' => 'Lorem ipsum dolor sit amet'
    ];

    return view('skills', $data);
})->name('skills');
