<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.home',[
        "title"=>"Beranda"
    ]);
});

Route::get('/tentang', function () {
    return view('landingpage.about',[
        "title"=>"Tentang"
    ]);
});

Route::get('/ekstrakulikuler', function () {
    return view('landingpage.services',[
        "title"=>"Ekstrakulikuler"
    ]);
});

Route::get('/prestasi', function () {
    return view('landingpage.project',[
        "title"=>"Prestasi"
    ]);
});

Route::get('/admin/dashboard', function () {
    return view('admin.layouts.master',[
        "title"=>"dashboard"
    ]);
});

Route::get('/admin/laporan', function () {
    return view('admin.layouts.laporan',[
        "title"=>"laporan"
    ]);
});

Route::get('/admin/presensi', function () {
    return view('admin.layouts.presensi',[
        "title"=>"presensi"
    ]);
});
