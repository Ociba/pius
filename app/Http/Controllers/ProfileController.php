<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * This function gets profile form
     */
    protected function getProfile(){
        return view('Admin.company.profile');
    }
}
