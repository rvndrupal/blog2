<?php



Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/about', function () {
    return view('about');
});

