<?php

namespace App\Http\Controllers;

use App\Customer;

class HomeController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	return view('home', compact('customers'));
    }

    
    
}
