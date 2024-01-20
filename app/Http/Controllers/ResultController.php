<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function TerminalResult(){
        return view("pages.Results.termResult");
    }
    public function TutorialResult(){
        return view("pages.Results.tutorialResult");
    }
    public function BoardResult(){
        return view("pages.Results.boardResult");
    }
    public function PDFResult(){
        $results=[
            [ "id"=> "01", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "02", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "03", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "04", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "05", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "06", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "07", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "08", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "09", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"],
            [ "id"=> "10", "class"=> "Class Name", "resultTitle"=> "Result Title", "date"=> "publsih date", "download"=> "Downlode File"]
        ];
        return view("pages.Results.result", ['results'=>$results]);
    }
}
