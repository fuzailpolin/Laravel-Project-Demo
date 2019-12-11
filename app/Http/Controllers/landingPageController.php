<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\imageCrud;


class landingPageController extends Controller
{
    public function index(){
		$randomUser =imageCrud::inRandomOrder()
                ->take(10)
				->get();
				
		//return $randomUser;
		return view('landingPage.index')->with('users', $randomUser);
	}
	
	public function imageView($img){
		return view('landingPage.post')->with('img', $img);
	}
	
	public function imgType($type){
		$randomUser =imageCrud::where('image_type', $type)
				->inRandomOrder()
                ->take(10)
				->get();
		return view('landingPage.index')->with('users', $randomUser);
	}
}
