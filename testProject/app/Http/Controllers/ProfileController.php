<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
	function getProfile()
	{
		$person = ['name'=>'#Nantipat Tullawattana',
		'department'=>'Software Engineer',
		'skill'=>'PHP,JAVA,C++',
		'status'=> 'Single'];
		return view('profile',$person);
	}
	function getYear()
	{
		$bYear = 1996;
		return $bYear+543;
	}

}
