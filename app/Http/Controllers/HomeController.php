<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function desktop1()
    {
        return view('desktop-1');
    }

    // Method to show the Contact Us page
    public function desktop3()
    {
        return view('desktop-3');
    }
    public function desktop4()
    {
        return view('desktop-4');
    }
}