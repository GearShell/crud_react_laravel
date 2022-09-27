<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactdetail;

class ContactController extends Controller
{
    public function contactData(Request $request) {
        $contactdetail=new contactdetail;
        $contactdetail->name=$request->name;
        $contactdetail->email=$request->email;
        $contactdetail->comments=$request->comments;
        $contactdetail->save();
    }
}
