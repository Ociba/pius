<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * This function fetches Transaction Information
     */
    protected function getTransaction(){
        return view('Admin.company.transaction');
    }
}
