<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class Note extends Controller
{
    public function addNoteView()
    {
        return view('note');
    }



    public function submitNote(Request $request){
        $note = new \App\Models\Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->public = $request->public;
        $note->user_id = $request->user_id;
        $note->save();
        return Redirect::route('notes');
    }

    public function listNoteView()
    {
        $data = \App\Models\Note::where('public', true)->get();
        return view('listnotes',["data"=>$data]);
    }

}