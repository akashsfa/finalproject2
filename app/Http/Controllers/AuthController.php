<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery_employe;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $this->validate(
            $request,
            [
            'phone'=>'required | min: 11',
            'password'=>'required| min: 5',
           ]
        );

        $employee = delivery_employe::where('phone', $request->phone)->where('password', $request->password)->first();
        if($employee){
            return redirect("/");
        }else{
            return redirect('login')->withErrors("Invalid Login");
        }

    }
}
