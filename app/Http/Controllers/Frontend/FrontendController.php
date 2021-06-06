<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Mission;
use App\Model\NewsEvent;
use App\Model\Service;
use App\Model\About;
use App\Model\Communicate;
use Mail;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['mission'] = Mission::first();
        $data['newsEvents'] = NewsEvent::orderBy('id', 'desc')->get(); 
        $data['services'] = Service::all();
        return view('frontend.layouts.home', $data); 
    }

    public function aboutUs(){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        return view('frontend.singlePages.about-us', $data); 
    }

    public function contactUs(){
        $data['logo'] = Logo::first();
        return view('frontend.singlePages.contact-us', $data); 
    }

    public function newsDetails($id){
        $data['logo'] = Logo::first();
        $data['news'] = NewsEvent::find($id);
        return view('frontend.singlePages.news-event-details', $data);
    }

    public function mission(){
        $data['logo'] = Logo::first();
        $data['mission'] = Mission::first();
        return view('frontend.singlePages.mission', $data); 
    }

    public function newsEvent(){
        $data['logo'] = Logo::first();
        $data['newsEvents'] = NewsEvent::orderBy('id', 'desc')->get(); 
        return view('frontend.singlePages.news-Events', $data); 
    }

    public function store(Request $request){
        $contact = new Communicate();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile_no = $request->mobile_no;
        $contact->address = $request->address;
        $contact->msg = $request->msg;
        $contact->save();

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'msg' => $request->msg
        );

        Mail::send('frontend.emails.contact', $data, function ($message) use($data){
            $message->from('naz.shakib97@gmail.com', 'Shakib Territory');
            $message->to($data['email']);
            $message->subject('Thanks for contacting us');
        });

        return redirect()->back()->with('success', 'Your Message has been successfully sent');
    }
}
