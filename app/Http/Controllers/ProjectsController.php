<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use Illuminate\Support\Facades\Schema;



class ProjectsController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

	public function index()
	{
        $projects = Project::all();
        // $projects = Project::first();

        // dd($projects);

        // lấy danh sách các column của table , https://laracasts.com/discuss/channels/tips/column-names-laravel-5

        // $columns = Schema::getColumnListing("Projects");
        // dd($columns);

        return view('projects/index', compact('projects'));
	}

    public function show($id)
    {
        $projects = Project::listActive()->get();

        $teams = \App\Team::listActive()->where('project_id', '=', $id)->get();
         
        // $teams = Project::find($id)->teams()->listActive()->get();

        return view('projects.show', [
            'projects' => $projects,
            'teams' => $teams
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// dd($request);
    	// dd(var_dump($request));

        $this->validate(request(), [
            'name' => 'required|unique:projects|max:100'
        ]);    	

        Project::create(request(['name']));

        return redirect('/projects');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $project = Project::find($id);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	// dd(var_dump($request));
        $this->validate($request, [
        	'name' => 'required|unique:projects',
        	'id' => 'required'
        ]);

        Project::where('id', '=', $request['id'])->update(array('name' => $request['name']));

        return redirect('/projects');
    }    

    public function destroy($id)
    {
    	dd($id);
    }
}

