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
        return view('layout.categories');
    }
}
