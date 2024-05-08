<?php

use Illuminate\Support\Facades\Route;

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

route::get('/Dashboard', function(){
    return view('admin.dashboard');
});

route::get('/', function(){
    return view('front.home');
});
