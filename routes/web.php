<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route mengembalikan nilai ke routes
Route::get('/percobaan', function () {
    return 'selamat pagi semua';
});

// menggunakan parameter
Route::get('/staf/{nama}/{devisi}', function ($nama, $devisi) {
    return 'nama pegawai'.$nama. 'dvisi '.$devisi;
});

Route::get('/tesakses', function () {
    return view('hello');
});

// mengakses file yg ada di dalam folder
route::get('/nilai', function(){
    return view('nilai.daftarnilai');
});
