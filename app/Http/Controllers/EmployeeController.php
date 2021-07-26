<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Auth;
use Hash;
use App\Models\User;
class EmployeeController extends Controller

{
    /** 
     * This function gets Employee details
    */
    protected function getEmployee(){
        $get_employee =Employee::get();
        return view('Admin.company.employee', compact('get_employee'));
    }
    /**
     * This function creates employees details
     */
    private function createEmployee(){
        $employee_obj =new Employee;
        $employee_obj ->name    =request()->name;
        $employee_obj ->email   =request()->email;
        $employee_obj ->address =request()->address;
        $employee_obj ->phone_number =request()->phone_number;
        $employee_obj ->password =request()->password;
        $employee_obj ->image =$this->getImage();
        $employee_obj ->created_by =Auth::user()->id;
        $employee_obj ->save();

        $user_obj =new User;
        $user_obj->name            = request()->name;
        $user_obj->email           = request()->email;
        $user_obj->password        = Hash::make(request()->password);
        $user_obj->category        = request()->category;
        $user_obj ->save();
        return redirect()->back()->with('msg', 'You have added Employee Successfully');
    }
   
    /**
     * This function saves employee image to folder
     */
    private function getImage(){
        $employee_photo = request()->image;
        $file_path = $employee_photo->getClientOriginalName();
        $employee_photo->move('employee/images/',$file_path);
        return $file_path;
    }
     /**
    * This function validates department created
    */
   protected function validateEmployee(){
    if(empty(request()->name)){
        return redirect()->back()->withErrors("Department Name  is needed");
    }elseif(empty(request()->email)){
        return redirect()->back()->withErrors('Email is needed, to continue');
    }elseif(empty(request()->address)){
        return redirect()->back()->withErrors('Address is needed, to continue');
    }elseif(empty(request()->phone_number)){
        return redirect()->back()->withErrors('Phone Number is needed, to continue');
    }elseif(empty(request()->password)){
        return redirect()->back()->withErrors('Password is needed, to continue');
    }elseif(empty(request()->image)){
        return redirect()->back()->withErrors('Image is needed, to continue');
    }elseif(empty(request()->category)){
        return redirect()->back()->withErrors('Category is needed, to continue');
    }else{
        return $this->createEmployee();
    }
   }
    /**
     * This function fetches the edit form form employee
     */
    public function editEmployee($id){
        $get_employee =Employee::get();
        return view('Admin.company.edit_employee', compact('get_employee'));
    }
    /**
     * This function updates the employee
     */
    public function updateEmployee($id){
        Employee::where('id', $id)->update(array(
            'name' =>request()->name,
            'email' =>request()->email,
            'address' =>request()->address,
            'phone_number' =>request()->phone_number,
            'password' =>request()->password,
        ));
        return redirect()->back()->with('msg', 'You have updated Employee Information Successfully');
    }
    /**
     * This function deletes Employee Permanently
     */
    protected function deleteEmployee($id){
    Employee::where('id',$id)->delete();
    return redirect()->back()->with('msg','You have successfully deleted Employee Information');
    }

}
