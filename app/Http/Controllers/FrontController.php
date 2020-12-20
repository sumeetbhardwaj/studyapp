<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
	{
		return view('home');
	}
	
	public function login()
	{
		return view('login');
	}
	public function registration()
	{
		return view('registration');
	}
	public function gkquestion()
	{
		return view('gkquestions');
	}
	public function statesgk()
	{
		return view('states');
	}
}
