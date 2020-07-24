<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home',['name' => "Home Page"]); //#d lo yay ll ya
    }

    public function phpPage()
    {
    	$data = array(
    			'lesson1'=>"This is php lesson1",
				'lesson2'=>"This is php lesson2",
				'lesson3'=>"This is php lesson3"
			
    	);
    	return view('php',compact('data'));  //#d lo yay ll ya
    }

    public function jsPage()
    {
    	$data = array(
    			'lesson1'=>"This is js lesson1",
				'lesson2'=>"This is js lesson2",
				'lesson3'=>"This is js lesson3"
			
    	);
    	return view('js',compact('data'));  //#d lo yay ll ya
    }
}
