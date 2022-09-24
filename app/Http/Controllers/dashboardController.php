<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // private const $userTypeList=["adin"];
    function index() {
        $user = Auth::user()->usertype;
        if($user=="user"){
            return view("/dashboard");
        }else{
            return redirect('/admin');
        }
    }
}
