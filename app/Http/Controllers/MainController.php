<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    private $viewName = 'main.index';

    public function index(Request $request){
        return view($this->viewName);
    }


    public function logout(Request $request){
        Auth::logout();
    }



}
