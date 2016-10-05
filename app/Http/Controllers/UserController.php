<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//Adds
use App\User;
use Session;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('profile.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //Instanciamos a User para que reconosca los mutators
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;

        //Buscamos si ya se registraron con este email
        $searchEmail = User::select('email')->whereNotIn('id',[auth()->user()->id])->where('email',$user->email)->first();
        if($searchEmail)
        {
            Session::flash('message-error','El email: '.$user->email.' ya esta siendo utilizado');
            return Redirect::to('/app/profile/');
        }
        //=>end
        
        //Guardamos
        User::where([
            'id'=>auth()->user()->id
            ])
        ->update([
            'name'=>$user->name,
            'email'=>$user->email
            ]);

        Session::flash('message-success','Datos guradados correctamente');
        return Redirect::to('/app/profile/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
