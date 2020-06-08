<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class aboutController extends BaseController
{
	public function index(){
		return view('index');
	}
    public function specialties(){
    	return view('about_us.specialties');
    }
    public function why_choose(){
    	return view('about_us.why_choose_us');
    }
    public function template(){
    	return view('pages.index');
    }
}
