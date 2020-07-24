<?php

namespace App\Http\Controllers;

use App\Receipes;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index()
    {
    	// dd("Hello from Receipe Home Page");
    	$data = \App\Receipes::all();
    	// dd($data);
    	return view('home',compact('data'));
    }
}
