<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
		
    public function store (Request $request, Card $card) {
        // to validate the Add note field
        $this->validate($request, [
                
        'body' => 'required|max:255',

            ]);

    	/**$note = new Note;
    	$note->body = $request->body;
    	$card->notes()->save($note);
		**/
        $note = new Note($request->all());
        $note->user_id = Auth::id();

		$card->addNote($note);
    	return back();
    }

        
    public function edit (Note $note) 
    {
        return view('notes.edit', compact('note'));    
    }

    
    public function update (Request $request, Note $note, Card $card)
    {
        $note->update($request->all());
       // return back();
        return redirect(url('cards/'. $card->id.'/'));
       // href= "{{ url('notes/'. $note->id. '/edit') }}"
        //Redirect::back(); -- go back a page
    }
          
    public function destroy(Request $request, Note $note, Card $card) 
    {
        $note->delete($request->all());
        return redirect(url('cards/'. $card->id.'/'));
    }    
              	
}
