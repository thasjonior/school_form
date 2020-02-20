<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    public function getStudents(){
        $student =Student::all();
        // var_dump($student);
        return view('home',['student'=> $student]);
    }

    public function saveStudent(Request $request){
        $student = new Student;
         
        $student->Fname = $request->Fname;
        $student->Sname = $request->Sname;
        $student->BirthDate = $request->BirthDate;
        $student->Age = $request->Age;
        $student->Gender = $request->Gender;
        $student->PhysicalAddress = $request->PhysicalAddress;
        $student->PostalAddress = $request->PostalAddress;
        // $student->Created_at = $request->Created_at;
        // $student->Updated_at = $request->Updated_at;

        if($student->save()) return redirect('/signup');

    }
    public function openForm (){
         return view('signup');
    }
}
