<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        return view("dashboard_admin");
    }
    function checkType(){
        $user = Auth::user()->usertype;
        if($user=="admin"){
            return redirect("/admin");
        }else{
            return redirect('/dashboard');
        }
    }

}
