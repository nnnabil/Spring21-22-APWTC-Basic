<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentCreate(){
        return view('pages.student.studentCreate');
    }
    public function studentCreatesubmitted(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'id'=>'required',
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
    );
        $student = new Student();
        $student->name = $request->name;
        $student->student_id = $request->id;
        $student->email = $request->email;
        $student->save();
        return $student;
    }
    public function studentList(){
        $students = Student::all();

        // for($i=0; $i<10; $i++){
        //     $student= array(
        //         "name"=>"Student ".($i+1),
        //         "id" => "00".($i+1),
        //         "dob" => "11-11-11"
        //     );
        //     $students[]= (object)$student;
        // }
        return view('pages.student.list')->with('students', $students);
        
    }
    public function studentEdit(Request $request){
        return $request->id;

    }
}
