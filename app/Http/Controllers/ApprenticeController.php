<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Training_center;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
     public function index(){

        $apprentices=Apprentice::all();

        return view('Aprendice.index',compact('apprentices'));
     }
    //

    public function registro(){

     $courses=Course::all();
     $computers=Computer::all();
        return view('Aprendice.registro', compact('courses', 'computers'));
    }
    
    public function dato(Request $request){
        Apprentice::create($request->all());
    }


    
}