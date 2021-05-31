<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;

class ContactController extends Controller
{
    public function view(){
        $data['allData'] = Contact::all();
        return view('backend.contact.view-contact', $data);
    }

    public function add(){
        return view('backend.contact.add-contact');
    }

    public function store(Request $request){
        $data = new Contact();
        $data->address = $request->address;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->google_plus = $request->google_plus;
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('contacts.view')->with('success','Contact Added Successfully');
    }

    public function edit($id){
        $editData = Contact::find($id);
        return view('backend.contact.edit-contact', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Service::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('services.view')->with('success','Service Updated Successfully');
    }

    public function delete($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.view')->with('success','Service Deleted Successfully');
    }
}
