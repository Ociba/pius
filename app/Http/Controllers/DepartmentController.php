<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * This function gets department of the com[pany
     */
    protected function getDepartment(){
        //$get_department =Department::get();
        //return view('admin.company.department', compact('get_department'));
        return view('Admin.company.department');
    }
}
