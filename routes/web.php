<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/yarn-story', function () {
    return view('pages.yarnstory');
});


Route::get('/journey', function () {
    return view('pages.journey');
});

