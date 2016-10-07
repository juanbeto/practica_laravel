<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Note;
//use Illuminate\Support\Facades\Redirect;

class NotesController extends Controller
{
    //
    public function index(){
      $notes = Note::all();  
      return view('notes/list', compact('notes'));
    }
    
    public function create(){
    //return 'HOLA';
      return view('notes/create');
    }
    
    public function store(Request $request){
        $this->validate($request, ['note'=>'required|max:200']);
        $data = $request->only(['note']);
        Note::create($data);
        return Redirect()->to('notes');
    }
    
    public function show(){
      return 'Se creo';
    }
}
