<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regController extends Controller
{
    public function index(){
		return view('registration.regIndex');
	}
}
