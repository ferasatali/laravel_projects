<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // todo => to create the new record
    public function create(Request $request)
    {
        DB::table('student')->insert([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','Student Added!!!');
    }
    // todo => to update the new record

    public function update(Request $request, $id)
    {
        DB::table('student')->where('id',$id)->update([
        'name'=>$request->name,
        'city'=>$request->city,
        'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','Student Updated!!!');

    }
    // todo => to delete the new record

    public function delete($id)
    {
        DB::table('student')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','Student Deleted!!!');
    }

    public function index()
    {
        $student = DB::table('student')->get();
        return view('main',['student'=> $student]);
    }

 
}
