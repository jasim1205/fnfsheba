<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corporate\CorporateHeader;
use App\Models\Corporate\CorporateMiddle;
use App\Models\Corporate\IndividualHeader;
use App\Models\Corporate\IndividualMiddle;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function who_we_are(){
        return view('frontend.about_us.who_we_are');
    }
    public function business_goal(){
        return view('frontend.about_us.business-goals');
    }
    public function our_teams(){
        return view('frontend.about_us.our-team');
    }
    public function corporate_services(){
        $header = CorporateHeader::where('status',1)->first();
        $middle=  CorporateMiddle::get();
        return view('frontend.our_services.corporate',compact('header','middle'));
    }
    public function individual_services(){
        $header = IndividualHeader::where('status',1)->first();
        $middle=  IndividualMiddle::get();
        return view('frontend.our_services.individual',compact('header','middle'));
    }
    public function ites_industries(){
        return view('frontend.industries.ites_industries');
    }
    public function agriculture_industries(){
        return view('frontend.industries.agriculture_industries');
    }
    public function healthcare_industries(){
        return view('frontend.industries.healthcare_industries');
    }
    public function our_clients(){
        return view('frontend.resources.our_clients');
    }
    public function contact_us(){
        return view('frontend.contact_us');
    }

    
}