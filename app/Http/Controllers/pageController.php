<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;
use App\Models\contactForms;
use Mail;

class pageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function departments(){
        return view('departments');
    }
    public function contact(){
        return view('contact');
    }
    public function departmentDetails(){
        return view('departmentDetails');
    }
    public function book(){
        return view('book');
    }
    public function saveAppointments(Request $request){
        $appointments = new appointments;
        $appointments->name = $request->name;
        $appointments->email = $request->email;
        $appointments->address = $request->address;
        $appointments->phone = $request->phone;
        $appointments->message = $request->message;
        $appointments->date = $request->date;
        $appointments->save();

        $input = $request->all();

        // $data = array('name'=>"Virat Gandhi");
        // Mail::send('book', $data, function($message) {
        //     $message->to('axad03213@gmail.com', 'Asad Mukhtar')->subject
        //     ('Checking purpose');
        //     $message->from('xyz@gmail.com','Virat Gandhi');
        // });
        return redirect()->back()->with('message','Our representative will contact you soon.');
    }
    public function saveContact(Request $request){
        $contactForm = new contactForms();
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->message = $request->message;
        $contactForm->save();
        return redirect()->back()->with('message','Thank you for your feedback.');
    }
}
