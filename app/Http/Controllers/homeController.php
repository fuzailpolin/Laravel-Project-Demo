<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
		return view('home.homeIndex');
	}
	
	public function gallary(){
		return view('home.gallary_view');
	}
	public function about(){
		return view('home.about');
	}
}
