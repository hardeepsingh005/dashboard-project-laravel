<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home()
    {
        return view('pages.home');
    }   
    
 public function about()
    {
        return view('pages.about');
    }

    public function services()
        {
            return view('pages.services');
        }

}
