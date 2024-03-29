<?php

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

Route::get('/', 'PagesController@welcome') ;
Route::post('/contact', 'PagesController@contact') ;
Route::post('/login', 'PagesController@login') ;
Route::get('/home', 'PagesController@home') ;
Route::post('/insert_bank', 'PagesController@insert_bank') ;
Route::post('/insert_data_bank_action', 'PagesController@insert_data_bank_action') ;
Route::post('/customer_insert_design', 'PagesController@customer_insert_design') ;
Route::post('/insert_option', 'PagesController@insert_option') ;
Route::post('/customer_data_insert', 'PagesController@customer_data_insert') ;
Route::post('/show_customer_bank_branch', 'PagesController@show_customer_bank_branch') ;
Route::post('/transaction_insert', 'PagesController@transaction_insert') ;
Route::post('/transaction_insertion_code', 'PagesController@transaction_insertion_code') ;
Route::post('/join_customer_transaction', 'PagesController@join_customer_transaction') ;
Route::post('/aggregate_function', 'PagesController@aggregate_function') ;
Route::post('/atm_insert', 'PagesController@atm_insert') ;
Route::post('/atm_insert_action', 'PagesController@atm_insert_action') ;
Route::post('/logout', 'PagesController@logout') ;
Route::post('/search_account', 'PagesController@search_account') ;
Route::post('/search_account_action', 'PagesController@search_account_action') ;
Route::post('/search_by_admin', 'PagesController@search_by_admin') ;
Route::post('/search_by_admin_code', 'PagesController@search_by_admin_code') ;



// Route::get('/contact', function () {
//     return view('contact');
// });

