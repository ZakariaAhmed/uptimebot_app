<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	
    	return view('customers', compact('customers'));
    }

}
