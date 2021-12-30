<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller{
    public function add(Request $request){
        $validation=$request->validate([
            'firstname'=>'required|min:3|max:10',
            'lastname'=>'required|min:5|max:15',
            'email'=>'required|min:8|max:20',
            'phone'=>'required|min:5|max:15',
        ]);
        $employee=new Employees();
        $employee->firstname=$request->firstname;
        $employee->lastname=$request->lastname;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->save();
        return redirect('/');
    }
    public function showEmployees() {
        return view('employees', [
            'employees' => Employees::all()
        ]);
    }

    public function showEditEmployee($id) {
        return view('edit', [
            'employee' => Employees::find($id),
            'id' => $id,
        ]);
    }

    public function edit($id, Request $request) {
        $employee = Employees::find($id);
        $reqData = $request->all();
        $employee->firstname = $reqData['firstname'];
        $employee->lastname = $reqData['lastname'];
        $employee->email = $reqData['email'];
        $employee->phone = $reqData['phone'];
        $employee->save();
        return redirect('/');
    }

    public function delete($id) {
        $employee = Employees::find($id);
        $employee->forceDelete();
        return redirect('/');
    }
}
