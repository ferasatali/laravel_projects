<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Quiz2 extends Controller
{

    public function index()
    {
        $student = DB::table('quiz_students')->get();
        return view('main',['student'=> $student]);
    }
    public function returnInsert()
    {
        return view('insert');
    }
    public function create(Request $request)
    {
        DB::table('quiz_students')->insert([
            'id'=>$request->id,
            'CGPA'=>$request->CGPA,
            'rollNumber'=>$request->rollNumber,
        ]);
        return redirect(route('index'))->with('status','Student Added!!!');
    }
    // todo => to update the new record

    public function delete(Request $request) {
        DB::table('quiz_students')->where('rollNumber',$request->rollNumber)->delete();
        return redirect(route('index'))->with('status','Student Deleted!!!');
    }

    

 
}
