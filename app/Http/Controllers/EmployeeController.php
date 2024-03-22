<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view("pages.employees.employeePage", compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.employees.employeeStorePage");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'n_id' => 'required|string',
            'mobile' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string'
        ]);

        try {
            return Employee::create([
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'n_id' => $request->input('n_id'),
                'mobile' => $request->input('mobile'),
                'gender' => $request->input('gender'),
                'address' => $request->input('address')
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'faild',
                'message' => 'Something went wrong!'
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',            
            'email' => 'required|string',            
            'mobile' => 'required|string',            
            'address' => 'required|string'
        ]);

        $id=$request->input('id');
        try {
            return Employee::where('id', $id)->update([
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'address' => $request->input('address')
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'faild',
                'message' => 'Something went wrong!'
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $id=$request->id;

        return Employee::where('id', $id)->delete();
    }
}
