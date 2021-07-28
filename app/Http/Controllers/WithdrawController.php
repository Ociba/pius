<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
use Auth;

class WithdrawController extends Controller
{
    /**
     * This function gets withdraw information 
     */
    protected function getWithdraw(){
        $total_withdraws =Withdraw::sum('amount');
        $get_withdraw_info =Withdraw::join('users','withdraws.created_by','users.id')
        ->select('withdraws.*','users.name','users.email')->get();
        return view('Admin.company.withdraw', compact('get_withdraw_info','total_withdraws'));
    }
     /**
     * This function widthdraws money
     */
    private function withdraw(){
        $withdraw =new Withdraw;
        $withdraw ->amount  =request()->amount;
        $withdraw ->created_by  =Auth::user()->id;
        $withdraw ->save();
        return redirect()->back()->with('msg','You have Successfully withdrawn Your Money');

    }
    /**
    * This function validates department created
    */
   protected function validateWithdraw(){
    if(empty(request()->amount)){
        return redirect()->back()->withErrors("Amount is needed");
    }else{
        return $this->withdraw();
    }
   }
}
