<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenditureController extends Controller
{
/**
 * This function gets expenditure information
 */
protected function getExpenditure(){
    return view('Admin.company.expenditure');
}
}
