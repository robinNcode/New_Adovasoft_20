<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function packages(){
    	return view('packages.packages');
    }

    public function web_packages(){
    	return view('packages.website_packages');
    }

    public function starter_web_package(){
    	return view('packages.starter_website_package');
    }

    public function dynamic_web_package(){
    	return view('packages.dynamic_website_package');
    }
}
