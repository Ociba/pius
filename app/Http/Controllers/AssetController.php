<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * This function fetches asset information
     */
    protected function getAsset(){
    return view('Admin.company.asset');
    }
}
