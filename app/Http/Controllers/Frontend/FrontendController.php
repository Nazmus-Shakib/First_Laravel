<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.layouts.home'); 
    }

    public function aboutUs(){
        return view('frontend.singlePages.about-us'); 
    }

    public function contactUs(){
        return view('frontend.singlePages.contact-us'); 
    }
}
