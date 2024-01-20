<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function Syllabus(){
        $syllabus=[
            [ "id"=> "01", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "02", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "03", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "04", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "05", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "06", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "07", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "08", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "09", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "10", "class"=> "Class Name", "syllabusTitle"=> "Syllabus Title", "date"=> "publsih date", "download"=> "Downlode File"]
        ];
        return view("pages.Syllabus.syllabus", ['syllabuses'=>$syllabus]);
    }
}
