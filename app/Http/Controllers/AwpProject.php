<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AwpProject extends Controller {
    public function index() {
        return view('login');
    }

    public function dashboard() {
        $pump = DB::table('pump')->get();
        return view('pump', ['pump' => $pump]);
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'password' => 'required',
            'email' => 'required|email',
        ]);

        $user = DB::table('users')
            ->where('password', $credentials['password'])
            ->where('email', $credentials['email'])
            ->first();
        if ($user) {
            return redirect(route('dashboard'))->with('status', 'Login SuccussFully');
        } else {
            return redirect(route('index'))->with('error', 'invalid Credentials !!!!!');
        }
    }
    public function customer() {
        $customer = DB::table('customer')->get();
        return view('customer', ['customer' => $customer]);
    }
    public function update(Request $request , $id) {
        $data = DB::table('customer')->where('id',$id)->get();
        return view('update',['data'=> $data]);
    }
    public function employee() {
        $employee = DB::table('employee')->get();
        return view('employee', ['employee' => $employee]);
    }
    public function discounts() {
        $discounts = DB::table('pump_discounts')->get();
        return view('discounts', ['discounts' => $discounts]);
    }

    public function fuel() {
        $fuel = DB::table('fuel')->get();
        $fuelConsumption = DB::table('fuel_consumption')->get();
        return view('fuel', ['fuel' => $fuel, 'fuelConsumption' => $fuelConsumption]);
    }

    public function createCustomer(Request $request) {
        DB::table('customer')->insert([
            'customer_name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'car_name' => $request->carname,
        ]);
        return redirect(route('customer'))->with('status', 'Customer Added!!!');
    }

    public function updateCustomer(Request $request, $id) { 
        DB::table('customer')
            ->where('id', $id)
            ->update([
                'customer_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'car_name' => $request->carname,
            ]);

        return redirect(route('customer'))->with('status', 'Customer Updated!!!');
    }

    public function createEmployee(Request $request) {
        DB::table('employee')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'salary' => $request->salary,
            'address' => $request->address,
            'time' => $request->time,
        ]);
        return redirect(route('employee'))->with('status', 'Employee Added!!!');
    }
    public function delete(Request $request, $id) {
        $table = $request->input('table');
        DB::table($table)->where('id', $id)->delete();
        if ($table === 'fuel_consumption') {
            return redirect(route('fuel'))->with('status', " $table . Deleted!!!");
        }
        return redirect(route($table))->with('status', " $table . Deleted!!!");
    }

    public function page(Request $request) {
        $page = $request->input('page');
        if ($page === 'Home') {
            return redirect(route('dashboard'));
        }
        return view('page');
    }
}
