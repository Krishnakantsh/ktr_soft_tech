<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    //. admin dashboard page
    public function index(){
        return view('Admin.Pages.index');
    }

    
}
