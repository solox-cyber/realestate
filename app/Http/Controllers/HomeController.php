<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function community()
    {
        return view('community');
    }

    public function agent()
    {
        return view('agent-single');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function homeDetails()
    {
        return view('home-details');
    }
}
