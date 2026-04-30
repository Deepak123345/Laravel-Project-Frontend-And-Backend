<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Gallery', function () {
    return view('GalleryWork/Gallery');
});

Route::get('Contact', function () {
    return view('All file Merge/footer');
});