<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.Dashboard');
    }

    public function packages(){
    	return view('Admin.Packages');
    }
}
