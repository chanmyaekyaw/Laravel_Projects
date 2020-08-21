<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\ReceipeCreatedEvent;
use App\Mail\ReceipeStored;
use App\Notifications\ReceipeStoredNotification;
use App\Receipe;
use App\User;
use App\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(2);
        return view('category.home_category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('category.create_category',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
        'name' => 'required',
        'description' => 'required',
        
    ]);
        $category = Category::create($validatedData); 
        return redirect("category")->with("message",'New category has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $this->authorize('view',$category);
        return view('category.show_category',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // $this->authorize('view',$category);
        // $category = Category::find($id);
        return view('category.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        
        $validatedData = request()->validate([
        'name' => 'required',
        'description' => 'required',
    ]);
        
        $receipe->update($validatedData); 

        return redirect("category")->with("message",'New category has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $category->delete();
        return redirect("category")->with("message",'Category has been deleted successfully!');

    }
}


