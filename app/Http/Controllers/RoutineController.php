<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function ClassRoutine(){
        $routine=[
            ['id'=>'01','class'=>'Class 01','title'=>'Class-01 Schedule and Routine','date'=>'Published Date','download'=>'Download File'],
            ['id'=>'02','class'=>'Class 02','title'=>'Class-02 Schedule and Routine','date'=>'Published Date','download'=>'Download File'],
            ['id'=>'03','class'=>'Class 03','title'=>'Class-03 Schedule and Routine','date'=>'Published Date','download'=>'Download File'],
            ['id'=>'04','class'=>'Class 04','title'=>'Class-04 Schedule and Routine','date'=>'Published Date','download'=>'Download File']           
        ];
        return view("pages.routine.classRoutine", ['routines' => $routine]);
    }
    public function ExamRoutine(){
        $routine=[
            ['id'=>'01','class'=>'Class 01','title'=>'Class-01 Exame Routine','date'=>'Published Date','download'=>'Download File'],
            ['id'=>'02','class'=>'Class 02','title'=>'Class-02 Exame Routine','date'=>'Published Date','download'=>'Download File'],
            ['id'=>'03','class'=>'Class 03','title'=>'Class-03 Exame Routine','date'=>'Published Date','download'=>'Download File'],
            ['id'=>'04','class'=>'Class 04','title'=>'Class-04 Exame Routine','date'=>'Published Date','download'=>'Download File']           
        ];
        return view("pages.routine.examRoutine", ['routines' => $routine]);
    }
}
