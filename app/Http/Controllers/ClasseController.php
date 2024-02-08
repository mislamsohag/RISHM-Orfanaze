<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    function ClasseCreate(Request $request)
    {

        try {
            Classe::create([
                'className' => $request->input('className'),
                'admissionFee' => $request->input('admissionFee'),
                'electricityFee' => $request->input('electricityFee'),
                'classExamFee' => $request->input('classExamFee'),
                'finalExamFee' => $request->input('finalExamFee'),
                'libraryFee' => $request->input('libraryFee'),
                'welfareFee' => $request->input('welfareFee'),
                'semisterFee' => $request->input('semisterFee'),
                'registrationFee' => $request->input('registrationFee'),
                'boardExamFee' => $request->input('boardExamFee')
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Class name entry is successfully'
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage(),
            ], 401);
        }

    }

    public function Update(Request $request)
    {

        $id = $request->input('id');
        try {
            Classe::where('id', $id)->update([
                'className' => $request->input('className'),
                'admissionFee' => $request->input('admissionFee'),
                'electricityFee' => $request->input('electricityFee'),
                'classExamFee' => $request->input('classExamFee'),
                'finalExamFee' => $request->input('finalExamFee'),
                'libraryFee' => $request->input('libraryFee'),
                'welfareFee' => $request->input('welfareFee'),
                'semisterFee' => $request->input('semisterFee'),
                'registrationFee' => $request->input('registrationFee'),
                'boardExamFee' => $request->input('boardExamFee')
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Class updated successfully'
            ], 200);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage(),
            ], 401);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function Destroy(Request $request)
    {
        $id = $request->id;
        // dd($id);

        try {
            Classe::where('id', $id)->delete();

            return response()->json([
                'status' => 'sucess',
                'message' => 'Classe delete successfully'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'faild',
                'message' => $e
            ]);
        }
    }
}
