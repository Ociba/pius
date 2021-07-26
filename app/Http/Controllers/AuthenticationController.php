<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthenticationController extends Controller
{
    /**
     * this function logs out the user
     */
    protected function logoutUser(){
        Auth::logout();
        return redirect('/');
    }
}
