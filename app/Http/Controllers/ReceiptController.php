<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    /**
     * get receipts for expenditure
     */
    protected function getReceipt(){
        return view('Admin.company.receipts');
    }
}
