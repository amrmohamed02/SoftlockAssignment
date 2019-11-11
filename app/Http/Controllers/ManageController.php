<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageController extends Controller
{
    public function printPDF($id)
    {
        
        $course=Course::find($id);
        $student=Student::all();
        $pdf = PDF::loadView('pdf_view',['student'=>$student,'course'=>$course]);  
        return $pdf->download('result.pdf');
        
    }

    public function Show()
    {
        $courses=Course::all();
        return view('home',['courses'=> $courses]);   
    }
   

    public function ShowStudent(Request $request,$id)
    {

        if($request->isMethod("post")){
            $ids = $request->input('id');
            $grades = $request->input('grade');
            for ($i=0; $i <count($ids) ; $i++) { 
                DB::table('student')->where('id',$ids[$i])->update(['grade'=>$grades[$i]]);
            }
        }
        $courses=Course::all();
        $course=Course::find($id);
        $student=Student::all();
        return view('content',['courses'=> $courses,'course'=>$course,'student'=>$student]);
        
    }

    public function Insert(Request $request)
    {
    
        if($request->isMethod('post')){
            if($request->input('name')){

                $s= new Student();
                $s->name = $request->input('name');
                $s->grade = $request->input('grade');
                $s->course_id = $request->get('id');
                $s->save();
                return redirect('insert');
            }

            if($request->input('course')){

                $c= new Course();
                $c->name = $request->input('course');
                $c->save();
                return redirect('insert');
            }
        }
        $courses=Course::all();
        return view('insert',['courses'=> $courses]);
        
   
}
}