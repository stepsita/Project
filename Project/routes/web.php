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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('catalogue', function () {
    return view('catalogue');
});

Route::get('form-planes', function () {
    return view('form-planes');
});

Route::get('form-planes-change', function () {
    return view('form-planes-change');
});

Route::get('form-servicios', function () {
    return view('form-servicios-change');
});

Route::get('form-servicios-change', function () {
    return view('form-servicios-change');
});

Route::get('form-customer-add', function () {
    return view('form-customer-add');
});

Route::get('form-worker-add', function () {
    return view('form-worker-add');
});

Route::get('form-customer-modify', function () {
    return view('form-customer-modify');
});

Route::get('form-worker-modify', function () {
    return view('form-worker-modify');
});

Route::get('find-customer', function () {
    return view('find-customer');
});

Route::get('find-worker', function () {
    return view('find-worker');
});

Route::get('change-porfile-customer', function () {
    return view('change-porfile-customer');
});

Route::get('change-porfile-worker', function () {
    return view('change-porfile-worker');
});

Route::get('security-question', function () {
    return view('security-question');
});

Route::get('statistics', function () {
    return view('statistics');
});

Route::get('personal-statistics', function () {
    return view('personal-statistics');
});

Route::get('porfile-worker', function () {
    return view('porfile-worker');
});

Route::get('porfile-customer', function () {
    return view('porfile-customer');
});

Route::get('addline-customer', function () {
    return view('addline-customer');
});