<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//Agregados
use App\Note;
use Session;
use Redirect;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::where('user_id', auth()->user()->id)->get();
        return view('notes.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        Note::create(['user_id'=>auth()->user()->id,'title'=>$title,'description'=>$request->input('description')]);
        Session::flash('message-success','Nota creada correctamente: '.$title);
        return Redirect::to('/app/notes/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::where(['id'=>$id,'user_id'=>auth()->user()->id])->first();
        if(count($note)==0)
        {
            return Redirect::to('/app/notes/');
        }
        return view('notes.edit',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::where(['id'=>$id,'user_id'=>auth()->user()->id])->first();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        Session::flash('message-success','Nota se actualizo correctamente: '.$request->title);
        return Redirect::to('/app/notes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Note::destroy($id);
        //$note = Note::find($id);
        //$note = Note::where(['id'=>$id,'user_id'=>auth()->user()->id])->first();
        //$note->delete();
        Session::flash('message-success','Nota se elimino correctamente');
        return Redirect::to('/app/notes/');
    }
}