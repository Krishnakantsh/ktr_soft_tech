<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    //. admin dashboard page
    public function index(){
        return view('Admin.Pages.index');
    }
    //. admin dashboard page
    public function login(){
        return view('Admin.Pages.Authentication.Pages.login');
    }
    //. admin dashboard page
    public function signup(){
        return view('Admin.Pages.Authentication.Pages.signup');
    }
    //. admin dashboard page
    public function reset_pass(){
        return view('Admin.Pages.Authentication.Pages.reset-password');
    }
    //. admin dashboard page
    public function forget_pass(){
        return view('Admin.Pages.Authentication.Pages.forget-password');
    }

    
}
