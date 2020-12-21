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
}
