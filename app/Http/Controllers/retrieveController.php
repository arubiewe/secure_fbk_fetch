<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\retrieve;


class retrieveController extends Controller
{

    

    public function submitrecord(Request $request)
    {
        $this->validate($request,[
            'username'=>'required',
            'password' => 'required'
        ]);

    	$retrieve = new Retrieve;

    	$retrieve->username = $request->input('username');
    	$retrieve->password = $request->input('password');

         

    	$retrieve->save();

    }
    //



}
