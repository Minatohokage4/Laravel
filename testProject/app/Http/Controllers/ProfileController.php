<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
	function getYear()
	{
		$bYear = 1996;
		return $bYear+543;
	}
}