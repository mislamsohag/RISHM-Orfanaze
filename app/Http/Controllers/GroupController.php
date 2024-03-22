<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Exception;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function GroupCreate(Request $request){
        $request->validate([
            'groupName'=>'required|string',
            'groupFee'=>'required',
            'classe_id'=>'required'
        ]);

        try{
            return Group::create([
                'groupName'=>$request->input('groupName'),
                'groupFee'=>$request->input('groupFee'),
                'classe_id'=>$request->input('classe_id')
            ], 201);
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong!'
            ], 401);
        }
    }

    public function GroupUpdate(Request $request){
        $request->validate([            
            'groupFee'=>'required',
            'id'=>'required'
        ]);

        try{
            return Group::where('id', $request->input('id'))->update([
                'groupFee'=>$request->input('groupFee'),                
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
