<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all(); // Fetch all customers
        return view('customers.index', compact('customers'));
    }
}
