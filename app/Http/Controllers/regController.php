<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class regController extends Controller
{
    public function index(){
		return view('registration.regIndex');
	}
	
	public function store(Request $req){
		$user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        //$user->name = $req->username;
        $user->type = "customer";
        if($user->save()){
            return redirect()->route('home.index');
        }else{
            //return redirect()->route('student.add');
			echo "not Registered";
        }
	}
}
