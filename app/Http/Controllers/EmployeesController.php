<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    function Employee(){
        $employee=[
            [
                'id'=>1,
                'image'=>'url1',
                'name'=>'Mohammad Asheque Ameen Majumder',
                'designation'=>'Advisor',
                'phone'=>'0171----------'
            ],
            [
                'id'=>2,
                'image'=>'url2',
                'name'=>'Md. Moniruzzaman',
                'designation'=>'Muhtameem/Principal',
                'phone'=>'01------------'
            ],
            [
                'id'=>3,
                'image'=>'url3',
                'name'=>'Md. Masud Alam',
                'designation'=>'Assistant Teacher (English)',
                'phone'=>'01----------'
            ],
            [
                'id'=>4,
                'image'=>'url3',
                'name'=>'Md. Mazharul Islam Sohag',
                'designation'=>'Engineer',
                'phone'=>'01812060163'
            ],
        ];
        return view("pages.employees.employees", ['employees'=>$employee]);
    }
}
