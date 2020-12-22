<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{	
	public function admin(){
		return view('admin/login');
	}	
    public function deshboard(){
		return view('admin/deshboard');
	}
	public function table(){
		return view('admin/tables');
	}
	public function subjects(){
		return view('admin/subjects');
	}
}
