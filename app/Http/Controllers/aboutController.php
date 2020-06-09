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

    public function website_hosting(){
        return view('about_us.website_hosting');
    }

    public function our_dream_vision(){
        return view('about_us.our_dream_vision');
    }

    public function db_solution(){
        return view('about_us.db_solution');
    }

    public function our_db_solutions(){
        return view('about_us.our_db_solutions');
    }

    public function technology(){
        return view('about_us.technology');
    }

    public function terms_and_conditions(){
        return view('about_us.terms_and_conditions');
    }

    public function energy_saving_websites(){
        return view('about_us.energy_saving_websites');
    }
    
}
