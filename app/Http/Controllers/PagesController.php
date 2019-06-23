<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function welcome()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        return view('home');
    }
    public function insert_bank()
    {
        return view('insert_bank');
    }
    public function insert_data_bank_action()
    {
        return view('insert_data_bank_action');
    }
    public function customer_insert_design()
    {
        return view('customer_insert_design');
    }

    public function insert_option()
    {
        return view('insert_option');
    }

    public function customer_data_insert()
    {
        return view('customer_data_insert');
    }
    public function show_customer_bank_branch()
    {
        return view('show_customer_bank_branch');
    }
    public function transaction_insert()
    {
        return view('transaction_insert');
    }
    public function transaction_insertion_code()
    {
        return view('transaction_insertion_code');
    }
    public function join_customer_transaction()
    {
        return view('join_customer_transaction');
    }
    public function aggregate_function()
    {
        return view('aggregate_function');
    }
    public function atm_insert()
    {
        return view('atm_insert');
    }
    public function atm_insert_action()
    {
        return view('atm_insert_action');
    }
    public function logout()
    {
        return view('logout');
    }
    public function search_account()
    {
        return view('search_account');
    }
    public function search_account_action()
    {
        return view('search_account_action');
    }
    public function search_by_admin()
    {
        return view('search_by_admin');
    }
    public function search_by_admin_code()
    {
        return view('search_by_admin_code');
    }
    
    
    
    
}
