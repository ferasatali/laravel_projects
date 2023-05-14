<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AWP extends Controller
{
    public function index(Request $request) {   
        $student = DB::table('awp_practice')->get();
        return view('main',['student'=> $student]);
    }
    public function create(Request $request) {   
        DB::table('awp_practice')->insert([
            'id'=>$request->id,
            'CGPA'=>$request->CGPA,
            'rollNumber'=>$request->rollNumber,
        ]);
        return redirect(route('index'))->with('status','Student Added!!!');
    }
    public function update(Request $request, $id) {
        DB::table('student')->where('id',$id)->update([
        'name'=>$request->name,
        'city'=>$request->city,
        'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','Student Updated!!!'); 
    }
    public function delete(Request $request) {
        DB::table('awp_practice')->where('rollNumber',$request->rollNumber)->delete();
        return redirect(route('index'))->with('status','Student Deleted!!!');
    }
    public function returnInsert() {   
        return view('insert');  
    }
}
