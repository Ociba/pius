<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * This function gets withdraw information 
     */
    protected function getWithdraw(){
        return view('Admin.company.withdraw');
    }
}
