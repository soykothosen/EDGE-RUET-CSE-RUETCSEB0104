<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getData(){
        #return 'Lab Data';
        return view('home');
    }


}
