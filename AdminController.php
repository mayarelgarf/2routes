<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function AdminPanel(){
        return view('layout.admin');
    }
    function categories(){
        $categories = category::all();
        return view('layout.categories')->with('categories',$categories);
    }
}
