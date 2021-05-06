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

Route::get('/admin/new/school-branch', function(){
    return view('pages.admin.new-customer', ['page' => 'ADD NEW CUSTOMER']);
})->name('new-customer');

Route::get('/admin/customer/payment', function(){
    return view('pages.admin.payment', ['page' => 'CUSTOMER PAYMENT']);
})->name('payments');

Route::get('/admin/customer/lists', function(){
    return view('pages.admin.customer-lists', ['page' => 'TABLE OF CUSTOMERS']);
})->name('customer-lists');
