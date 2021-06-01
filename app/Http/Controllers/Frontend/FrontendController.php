<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Mission;
use App\Model\NewsEvent;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['mission'] = Mission::first();
        $data['newsEvents'] = NewsEvent::orderBy('id', 'desc')->get(); 
        return view('frontend.layouts.home', $data); 
    }

    public function aboutUs(){
        return view('frontend.singlePages.about-us'); 
    }

    public function contactUs(){
        return view('frontend.singlePages.contact-us'); 
    }

    public function newsDetails($id){
        $data['logo'] = Logo::first();
        $data['news'] = NewsEvent::find($id);
        return view('frontend.singlePages.news-event-details', $data);
    }
}
