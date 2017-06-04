<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Login Page for GET /login
     *
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Handle Logn , POST /login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        \Log::info('Showing user profile for user: '.request('username').' / '.request('password'));

        $user = \App\User::where( 'username', '=', request('username') )->first();

        if( is_null($user) )
            return back()->withErrors( ['message' => 'Please check your username login and try again'] );

        if( $user->isActive == 0 )
            return back()->withErrors( ['message' => 'User has been disabled. Please contact Admin'] );

        if( ! \Auth::attempt( ['username' => request('username'), 'password' => request('password')]) )
            return back()->withErrors( ['message' => 'Please check your password and try again'] );
        
        return redirect()->home();         
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
        //
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
        //
    }

    /**
     * Handle logout , GET /logout
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        \Auth::logout();

        return redirect()->home();
    }
}
