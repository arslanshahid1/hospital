<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;


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
    public function save(Request $request){
        $appointments = new appointments;
        $appointments->name = $request->name;
        $appointments->email = $request->email;
        $appointments->address = $request->address;
        $appointments->phone = $request->phone;
        $appointments->message = $request->message;
        $appointments->date = $request->date;
        $appointments->save();
        return redirect()->back()->with('message','Our representative will contact you soon');
    }
}
