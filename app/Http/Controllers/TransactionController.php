<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Auth;

class TransactionController extends Controller
{
    /**
     * This function fetches Transaction Information
     */
    protected function getTransaction(){
        $get_transction =Transaction::where('status','active')->get();
        return view('Admin.company.transaction', compact('get_transction'));
    }
    /**
     * This function creates transaction
     */
    private function createTransaction(){
        $create_transation =new Transaction;
        $create_transation ->item  =request()->item;
        $create_transation ->quantity  =request()->quantity;
        $create_transation ->amount  =request()->amount;
        $create_transation ->deposit  =request()->deposit;
        $create_transation ->balance  =request()->balance;
        $create_transation ->company  =request()->company;
        $create_transation ->end_date  =request()->end_date;
        $create_transation ->email  =request()->email;
        $create_transation ->phone  =request()->phone;
        $create_transation ->created_by  =Auth::user()->id;
        $create_transation ->save();
        return redirect()->back()->with('msg','You have created Transaction Successfully');

    }
     /**
    * This function validates department created
    */
   protected function validateTransaction(){
    if(empty(request()->item)){
        return redirect()->back()->withErrors("Item is needed");
    }elseif(empty(request()->quantity)){
        return redirect()->back()->withErrors('Quantity is needed, to continue');
    }elseif(empty(request()->amount)){
        return redirect()->back()->withErrors('Amount is needed, to continue');
    }elseif(empty(request()->company)){
        return redirect()->back()->withErrors('Company is needed, to continue');
    }elseif(empty(request()->end_date)){
        return redirect()->back()->withErrors('End date is needed, to continue');
    }elseif(empty(request()->email)){
        return redirect()->back()->withErrors('Email is needed, to continue');
    }elseif(empty(request()->phone)){
        return redirect()->back()->withErrors('Phone Number is needed, to continue');
    }else{
        return $this->createTransaction();
    }
   }
   /**
    * This function prints individual data
    */
    protected function printTransaction($id){
        $get_transaction_to_be_printed =Transaction::where('id', $id)->get();
        return view('Admin.company.print', compact('get_transaction_to_be_printed'));
    }
     /**
    * This function prints copy now forindividual data
    */
    protected function printTransactionCopy($id){
        $print_now =Transaction::where('id', $id)->get();
        return view('Admin.company.invoice-copy', compact('print_now'));
    }
}
