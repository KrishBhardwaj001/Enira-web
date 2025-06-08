<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/sectors', function () {
    return view('sectors');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/contact', function () {
    return view('contact');
});