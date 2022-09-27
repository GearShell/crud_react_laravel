<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class getDataApi extends Controller
{
    public function getList() {
        return register::all();
    }
}
