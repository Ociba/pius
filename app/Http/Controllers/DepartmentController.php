<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Auth;

class DepartmentController extends Controller
{
    /**
     * This function gets department of the com[pany
     */
    protected function getDepartment(){
        $get_department =Department::get();
        return view('Admin.company.department', compact('get_department'));
    }
    /**
     * This function creates department
     */
    private function createDepartment(){
        $create_department =new Department;
        $create_department ->name =request()->name;
        $create_department ->description =request()->description;
        $create_department ->created_by =Auth::user()->id;
        $create_department ->save();
        return redirect()->back()->with('msg', 'You have added Department Successfully');
    }
    /**
     * This function validates department created
     */
    protected function validateDepartment(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors("Department Name  is needed");
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Description is needed, to continue');
        }else{
            return $this->createDepartment();
        }
    }
    /**
     * This function calls form for editing form
     */
    protected function editDepartment($id){
        $get_department =Department::where('id',$id)->get();
        return view('Admin.company.edit_department','get_department');
    }
    /**
     * This function updates the department
     */
    protected function updateDepartment($id){
        Department::where('id',$id)->update(array(
            'name' =>request()->name,
            'description' =>request()->description
        ));
        return redirect()->back()->with('msg','You have successfully Updated Department Information');
    }
    /**
     * This function deletes department permanently
     */
    protected function deleteDepartment($id){
        Department::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have successfully deleted Department Information');
    }
}
