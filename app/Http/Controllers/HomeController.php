<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    // Method to show the Contact Us page
    public function school()
    {
        return view('school');
    }
}