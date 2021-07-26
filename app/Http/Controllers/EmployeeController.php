<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /** 
     * This function gets Employee details
    */
    protected function getEmployee(){
        return view('Admin.company.employee');
    }
}
