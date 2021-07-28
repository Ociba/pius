<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenditure;
use Auth;
use DB;

class ExpenditureController extends Controller
{
/**
 * This function gets expenditure information
 */
protected function getExpenditure(){
    $get_expenditure =Expenditure::get();
    return view('Admin.company.expenditure', compact('get_expenditure'));
}
/**
     * This function creates expenditure
     */
    private function createExpenditure(){
        $create_expend =new Expenditure;
        $create_expend ->item      =request()->item;
        $create_expend ->quantity  =request()->quantity;
        $create_expend ->price     =request()->price;
        $create_expend ->responsible_person =request()->responsible_person;;
        $create_expend ->created_by =Auth::user()->id;
        $create_expend ->save();
        return redirect()->back()->with('msg','You have created Expenditure Successfully');
    }
    /**
     * This function validates the expenditure created
     */
    protected function validateExpenditure(){
        if(empty(request()->item)){
            return redirect()->back()->withErrors("Item Name  is needed");
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Price is needed, to continue');
        }elseif(empty(request()->responsible_person)){
            return redirect()->back()->withErrors('Responsible Person is needed, to continue');
        }elseif(empty(request()->quantity)){
            return redirect()->back()->withErrors('Quantity is needed, to continue');
        }else{
            return $this->createExpenditure();
        }
    }
    /**
     * This function gets the expenditure edit form
     */
    protected function editExpenditure($id){
        $edit_expenditure =Expenditure::where('id',$id)->get();
        return view('Admin.company.edit-expenditure', compact('edit_expenditure'));
    }
    /**
     * This function updates the expenditure
     */
    protected function updateExpenditure($id){
        Expenditure::where('id',$id)->update(array(
        'item' =>request()->item,
        'price' =>request()->price,
        'quantity' =>request()->quantity,
        'responsible_person' =>request()->responsible_person,
    ));
        return redirect()->back()->with('msg','You have successfully Updated Expenditure');
    }
    /**
     * This function deletes Expenditure completely
     */
    protected function deleteExpenditure($id){
        Expenditure::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have successfully deleted Expense Information');
    }
}
