<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
		return view('home.homeIndex');
	}
	
	public function gallary(){
		//return view('home.gallary_view');
		return view('home.mosaic_view');
		//return view('home.pictureUpload');
	}
	public function about(){
		return view('home.about');
	}
	public function pictureUpload(){
		return view('home.pictureUpload');
	}
}
