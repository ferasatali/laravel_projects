<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class DataController extends Controller
{
    public function save(Request $request)
    {
        // Retrieve data from the form inputs
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phoneNumber = $request->input('phoneNumber');

    
        $user->save();
        // Redirect the user back to the form with a success message
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
};

?>