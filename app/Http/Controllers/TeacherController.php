<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function TeacherCreate(Request $request){
        $request->validate([
            'name' => 'required|string',            
            'title' => 'required|string',            
            'email' => 'required|string',            
            'n_id' => 'required',            
            'mobile' => 'required',            
            'gender' => 'required|string',            
            'index' => 'nullable',            
            'address' => 'required|string'
        ]);

        try{
            return Teacher::create([
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'n_id' => $request->input('n_id'),
                'gender' => $request->input('gender'),
                'mobile' => $request->input('mobile'),
                'index' => $request->input('index'),
                'address' => $request->input('address')
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong!'
            ],401);
        }
    }


    function TeacherUpdate(Request $request){
        $request->validate([
            'name' => 'required|string',            
            'title' => 'required|string',            
            'email' => 'required|string',    
            'mobile' => 'required',            
            'index' => 'nullable',            
            'address' => 'required|string'
        ]);

        $id=$request->input('id');
        try{
            return Teacher::where('id', $id)->update([
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'index' => $request->input('index'),
                'address' => $request->input('address')
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong!'
            ],401);
        }
    }


    function TeacherDelete(Request $request){
        return Teacher::where('id', $request->id)->delete();
    }
}
