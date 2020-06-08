<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{


	public function about_us(){
        return view('about_us.index');
    }

    public function specialties(){
    	return view('about_us.specialties');
    }

    public function why_choose(){
    	return view('about_us.why_choose_us');
    }

    public function designing(){
        return view('about_us.designing');
    }

    public function information_technology(){
        return view('about_us.information_technology');
    }
/*
    public function (){
        return view('about_us.');
    }

    public function (){
        return view('about_us.');
    }

    public function (){
        return view('about_us.');
    }

    public function (){
        return view('about_us.');
    }

    public function (){
        return view('about_us.');
    }

    public function (){
        return view('about_us.');
    }

    public function (){
        return view('about_us.');
    }
    */
}
