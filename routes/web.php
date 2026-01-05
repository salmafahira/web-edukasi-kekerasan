<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return view('user.home');
});

Route::get('/profil', function () {
    return view('user.profil');
});

/* ======================
| ADMIN (WAJIB LOGIN)
|======================*/
Route::get('/admin/dashboard', function () {

    if (!auth()->check() || auth()->user()->role !== 'admin') {
        abort(403);
    }

    return view('admin.dashboard');
});