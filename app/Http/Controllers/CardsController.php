<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
    	$cards = Card::all();
    	return view('cards.index', compact('cards')); 	
    }
		
    public function show (Card $card)
    {
       //$card = Card::all();
        // return $card;
    	return view('cards.show',compact('card'));
    }
	
    public function store (Request $request)
    {
        $this->validate($request, [
                'title' => 'required|max:255',

            ]);

        $card = new Card;
        $card->title = $request->title;
        //$card->index()->save($card);
        $card->save();
        return back();
    }
}
 