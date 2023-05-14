<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AwpProject extends Controller
{
    public function index()
    {
        $customer = DB::table('customer')->get();
        return view('main',['customer'=> $customer]);
    }
    public function home()
    {
        return view('main');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function create(Request $request)  {

        DB::table('students')->insert([    
            'name'=>$request->name,
            'phone_number'=>$request->phone,
            'email'=>$request->email,
        ]);
        return redirect(route('index'))->with('status','Student Added!!!');
    }
    // todo => to update the new record

    public function delete(Request $request)
    {
        DB::table('countries')->where('id',$request->id)->delete();
        return redirect(route('index'))->with('status','Question Deleted!!!');
    }
}
