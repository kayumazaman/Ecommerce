<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class adminController extends Controller
{
    public function index(){
       return view('adminpanel.index');
    }


    public function categories(){
        return view('adminpanel.pages.categories');
    }
}
