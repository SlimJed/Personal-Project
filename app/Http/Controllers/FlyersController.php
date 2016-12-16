<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;
use App\Flyer;
use App\photo;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class FlyersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }	

    public function index ()
    {
    	return view('flyers.flyerHome');
    }
		
    public function create ()
    {
        return view('flyers.flyerCreate');
    }

    public function store (FlyerRequest $request)
    {
        Flyer::create($request->all()); 
        flash()->success('Success', 'your Ad has been posted');

        return back();
    }		

    public function show ($zip, $street)
    { 
        $flyer = Flyer::locatedAt($zip, $street);  
        return view('flyers.flyerShow', compact('flyer')); 
    }	
    
    public function addPhoto ($zip, $street, Request $request)
    {
       $this->validate($request, [
               'photo' => 'required|mimes: jpg,jpeg,png,bmp'
            ]);       

       $photo = $this->makePhoto($request->file('photo')); 

        Flyer::locatedAt($zip, $street)->addPhoto($photo);
    }

    protected function makePhoto(UploadedFile $file)
    {
        return Photo::named($file
            ->getClientOriginalName())
            ->move($file);

    }
}
