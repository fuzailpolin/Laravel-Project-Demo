<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class imgManupulationController extends Controller
{
    public function index($img){
		return view('image.imgManupulation');
	}
	
	public function editImg(Request $req, $img){
            $file = Image::make('home_asset/images/img_11.jpg');
			//$filename= $file->getClientOriginalName();
			echo $file;
	}
}
