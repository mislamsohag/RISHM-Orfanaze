<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function SubjectCreate(Request $request){
        $request->validate([
            'subjectName'=>'required|string',
            'subjectCode'=>'nullable',
            'classe_id'=>'required',
            'group_id'=>'nullable'
        ]);

        try{
            return Subject::create([
                'subjectName'=>$request->input('subjectName'),
                'subjectCode'=>$request->input('subjectCode'),
                'classe_id'=>$request->input('classe_id'),
                'group_id'=>$request->input('group_id')
            ], 201);
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong!'
            ], 401);
        }
    }

    public function SubjectUpdate(Request $request){
        $request->validate([
            'subjectName'=>'required|string',
            'subjectCode'=>'nullable'            
        ]);

        try{
            return Subject::where('id', $request->input('id'))->update([
                'subjectName'=>$request->input('subjectName'),
                'subjectCode'=>$request->input('subjectCode')                
            ], 201);
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong!'
            ], 401);
        }
    }
}
