<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function products(){
        return view('projects');
    }
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function create(Request $req){
        $contact = new Contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->CompanyName= $req->CompanyName;

        $contact->address = $req->address;
        $contact->services = $req->services;
        $contact->message = $req->message;
        $contact->save();
        return redirect('/');


    }
}
