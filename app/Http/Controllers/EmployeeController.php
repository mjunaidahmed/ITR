<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller

{

    public function index(Request $request)

    {

        $employees= Employee::latest()->paginate(8);

        return view('employees.index',compact('employees'));

    }

    public function create()

    {

        return view('employees.create');

    }

    public function store(Request $request)

    {

        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'company' => 'required',
            'department' => 'required',
            'status' => 'required',

        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')

                        ->with('success','Record created successfully');

    }

    public function show($id)

    {

        $employee= Employee::find($id);

        return view('employees.show',compact('employee'));

    }

    public function edit($id)

    {

        $employee= Employee::find($id);

        return view('employees.edit',compact('employee'));

    }

    public function update(Request $request, $id)

    {

        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'company' => 'required',
            'department' => 'required',
            'status' => 'required',

        ]);

        Employee::find($id)->update($request->all());

        return redirect()->route('employees.index')

                        ->with('success','Record updated successfully');

    }

    public function destroy($id)

    {

        Employee::find($id)->delete();

        return redirect()->route('employees.index')

                        ->with('success','Record deleted successfully');

    }

}