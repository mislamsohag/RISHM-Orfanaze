<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable =[
        'className',
        'admissionFee',
        'electricityFee',
        'classExamFee',
        'finalExamFee',
        'libraryFee',
        'welfareFee',
        'semisterFee',
        'registrationFee',
        'boardExamFee'
    ];

    protected $attributes=[ 
        'libraryFee'=>'0',
        'welfareFee'=>'0',
        'semisterFee'=>'0',
        'registrationFee'=>'0',
        'boardExamFee'=>'0',
    ];
}

