<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function login(){
        return view('backend.home');
    }

    public function welcome(){
        return view('backend.welcome');
    }
}
