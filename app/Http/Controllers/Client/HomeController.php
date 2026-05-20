<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('client.home');
    }

    public function adopt(){
        return view('client.adopt');
    }
    
    public function donate(){
        return view('client.donate');
    }

    public function about(){
        return view('client.about');
    }

    public function contact(){
        return view('client.contact');
    }

    public function post(){
        return view('client.post');
    }
}
