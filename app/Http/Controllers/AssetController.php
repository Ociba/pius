<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Auth;
use DB;

class AssetController extends Controller
{
    /**
     * This function fetches asset information
     */
    protected function getAsset(){
    $get_asset =Asset::get();
    return view('Admin.company.asset', compact('get_asset'));
    }
    private function getInitialQuantity(){
        return DB::table('assets')->value('initial_quantity');
    }
    private function getGivenQuantity(){
        return DB::table('assets')->value('quantity_givenout');
    }
    /**
     * This function creates assets
     */
    private function createAsset(){
        $create_asset =new Asset;
        $create_asset ->asset_name       =request()->asset_name;
        $create_asset ->price            =request()->price;
        $create_asset ->initial_quantity =request()->initial_quantity;;
        $create_asset ->created_by =Auth::user()->id;
        $create_asset ->save();
        return redirect()->back()->with('msg','You have created Asset Successfully');
    }
    /**
     * This function validates the asset created
     */
    protected function validateAsset(){
        if(empty(request()->asset_name)){
            return redirect()->back()->withErrors("Department Name  is needed");
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Price is needed, to continue');
        }elseif(empty(request()->initial_quantity)){
            return redirect()->back()->withErrors('Initial Quantity is needed, to continue');
        }else{
            return $this->createAsset();
        }
    }
    /**
     * This function gets the Asset edit form
     */
    protected function editAsset($id){
        $edit_asset =Asset::where('id',$id)->get();
        return view('Admin.company.edit_asset', compact('edit_asset'));
    }
    /**
     * This function calculates the remaining quantity after giving out initial quantity
     */
    protected function giveOutAsset($id){
        $get_asset =Asset::where('id',$id)->get();
        return view('Admin.company.give-out-asset',compact('get_asset'));
    }
    /**
     * This function updates the distributed items quantity
     */
    protected function updateItemQuantity($id){
        Asset::where('id',$id)->update(array(
        'person' =>request()->person,
        'quantity_givenout' =>request()->quantity_givenout,
    ));
        return redirect()->back()->with('msg','You have distributed this Item Successfully');
    }
    /**
     * This function deletes asset completely
     */
    protected function deleteAsset($id){
        Asset::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have successfully deleted Asset Information');
    }
}
