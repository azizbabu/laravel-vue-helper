<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
    * Show a page to create a new project
    */
    public function create()
    {
        return view('projects.create', [
            'projects' => Project::all()
        ]);
    }

   /**
	* store a new project in the database
	*/
    public function store()
    {
    	request()->validate([
    		'name'	=> 'required',
    		'description'	=> 'required',
    	]);

    	Project::forceCreate([
    		'name'	=> request('name'),
    		'description'	=> request('description'),
    	]);

    	return ['message' => 'Project created'];
    }
}
