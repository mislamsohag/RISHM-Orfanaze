<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function TerminalResult(){
        return view("Components.Pages.Results.termResult");
    }
    public function TutorialResult(){
        return view("Components.Pages.Results.tutorialResult");
    }
    public function BoardResult(){
        return view("Components.Pages.Results.boardResult");
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
        return view("Components.Pages.Results.result", ['results'=>$results]);
    }
}
