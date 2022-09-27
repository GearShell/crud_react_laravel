<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class Postcontroller extends Controller
{
    public function addData(Request $request) {
        $register = new register;
        $register->first_name=$request->first_name;
        $register->last_name=$request->last_name;
        $register->email=$request->email;
        $register->password=$request->password;
        $register->country=$request->country;
        $register->save();
    }
    public function login(Request $request) {
        $register = register::where('email',$request->email)->first();
        if (!$register || !($register->password == $request->password)) {
            return array([
                "status"=>"Failed",
                "Message"=>"Incorrect Credential"
            ]);        
        }
        else {
            return array([
                "status"=>"Success",
                "Message"=>"Welcome ".$register->first_name
            ]);        
        }
    }

    public function clear($id){
        $register = register::where('id',$id)->delete();
        return "Deleted";
    }
}
