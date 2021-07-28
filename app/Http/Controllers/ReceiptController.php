<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use Auth;

class ReceiptController extends Controller
{
    /**
     * get receipts for expenditure
     */
    protected function getReceipt(){
        $get_receipt =Receipt::get();
        return view('Admin.company.receipts', compact('get_receipt'));
    }
    /**
     * This function creates Receipt
     */
    private function createReceipt(){
        $create_receipt =new Receipt;
        $create_receipt ->title =request()->title;
        $create_receipt ->file =$this->getFile();
        $create_receipt ->created_by =Auth::user()->id;
        $create_receipt ->save();
        return redirect()->back()->with('msg','You have successfully Saved the receipt');
    }
    /**
     * This function saves the image in file
     */
    private function getFile(){
            $receipt_photo = request()->file;
            $file_path = $receipt_photo->getClientOriginalName();
            $receipt_photo->move('receipts/images/',$file_path);
            return $file_path;
        }
    /**
     * This function validates when creating receipt
     */
    protected function validateReceipt(){
        if(empty (request()->title)){
            return redirect()->back()->withErrors('Title is needed to continue');
        }elseif(empty(request()->file)){
            return redirect()->back()->withErrors('File is needed to continue');
        }else{
            return $this->createReceipt();
        }
    }
    /**
     * This function edits receipts
     */
    protected function renameReciept($id){
        $get_receipt_to_edit =Receipt::get();
        return view('Admin.company.rename-receipt', compact('get_receipt_to_edit'));
    }
    /**
     * This function updates the receipt name
     */
    protected function updatesReceipt($id){
        Receipt::where('id', $id)->update(array(
            'title' =>request()->title
        ));
        return redirect()->back()->with('msg','You have successfully Updated receipt');
    }
    /**
     * This function deletes reciept permanently
     */
    protected function deleteReceipt($id){
        Receipt::where('id', $id)->delete();
        return redirect()->back()->with('msg','You have successfully deleted receipt');
    }
}
