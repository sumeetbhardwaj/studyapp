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
	public function states(){
		return view('admin/states');
	}
	public function currentgk(){
		return view('admin/currentgk');
	}
	public function jobs(){
		return view('admin/jobs');
	}
	public function onlinetests(){
		return view('admin/tests');
	}
	public function testcat(){
		return view('admin/testcat');
	}
	public function post(){
		return view('admin/post');
	}
	public function user(){
		return view('admin/users');
	}
}
