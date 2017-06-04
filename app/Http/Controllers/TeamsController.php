<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
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
     * Form for creating a new Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $teams = \App\Team::all();
        $teams = \App\Team::where('isActive', '<>', '0')->get();

        // $projects = \App\Project::listActive();  //dd($projects);
        $projects = \App\Project::all();

        return view('teams/create', ['teams' => $teams, 'projects' => $projects]);
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required|unique:teams|max:30'
        ]);

        $team = new \App\Team;

        $team->name = $request->name;

        $team->project_id = $request['project_id'];

        $team->save();

        // Mass Assignment : https://laravel.com/docs/5.4/eloquent
        // $name = \App\Team::create([
        //     'name' => $request['name'],
        //     'project_id' => $request->project_id
        // ]);

        // dd(var_dump($name));     // return object Model Eloquent

        return back();
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
