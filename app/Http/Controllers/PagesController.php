<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function welcome()
    {
    	return view('pages.welcome');
    }

    public function about ()
    {
    	return view('pages.about');
    }

 	public function career ()
    {
    	return view('pages.career');
    }

    public function blog ()
    {
    	return view('pages.blog');
    }
       
    public function projects ()
    {
    	return view('pages.projects');
    }
      
    public function social ()
    {
    	return view('pages.social');
    }          
}

