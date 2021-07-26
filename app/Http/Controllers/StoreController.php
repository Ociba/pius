<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
/**
 * This function fetches store informaation
 */
protected function getStore(){
    return view('Admin.company.store');
}
}
