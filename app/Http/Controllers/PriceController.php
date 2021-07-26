<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * This function fetches prices added
     */
    protected function getPrice(){
        return view('Admin.company.price');
    }
}
