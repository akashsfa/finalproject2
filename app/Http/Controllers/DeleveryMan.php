<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery_employe;
use App\Models\product_management;


class DeleveryMan extends Controller
{
    //
    public function OderList()
    {
    $oder=product_management :: all();
       return $oder;
    }

    public function OderListConfirm(Request $request){

        //$u = session('user'); 
        $p=delivery_employe::where('phone',$request->phone)->first();
        $pc=product_management::where('id',$request->id)->first();  //----------///
        
        $pc->delivery_employename=$p->name;
        $pc->dephone=$p->phone;
        $pc->save();
        return $pc;
        
    }
    
//login
    public function login_view()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {
        $employee = delivery_employe::where('phone', $request->phone)->where('password', $request->password)->first();
        if ($employee) {
            return $employee;
        }
        return false;

    }


    //
    public function Registration()
    {
        return view('D_Registration');
    }
    public function RegistrationSubmit(Request $request)
    {
        
        
        $this->validate
        (
            $request,
            [
            'name'=>'required | min: 3',
            'password'=>'required| min: 3',
            'phone'=>'required |regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'required| email|unique:delivery_employe',
            'dob'=>'required',
            'address'=>'required | min: 5'

           ],
           [
            'name.required'=>'put your name',
             'name.min'=>'name must be gether than  2 charecter'

           ]
        );

        

        $var=new delivery_employe();
        $var->name=$request->name;
        $var->email= $request->email;
        $var->phone= $request->phone;
        $var->password= $request->password;
        $var->dob= $request->dob;
        $var->address= $request->address;
        $var->save();
         return redirect()-> route('login');

        return "<h1>Registration Sucessfully</h1>";

       


    }
}
