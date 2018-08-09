<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FetchData;

class FetchConroller extends Controller
{

	public function dashboard()
	{

		$students = FetchData::all()->toArray();
		return view('pages.dashboard', compact('students'));





	}












    //
}
