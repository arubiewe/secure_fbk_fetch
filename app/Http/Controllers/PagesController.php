<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	// public function index(){
 //    	return view ('pages.index');
 //    }


public function index(){
    	return view ('pages.secure');
    }


public function dashboard(){
    	return view ('pages.dashboard');
    }

    //
    //
}
