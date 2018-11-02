<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index')->withProjects($projects);
    }

    public function indexJson()
    {
        $projects = Project::all();

        return $projects;
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // return request();     // for debugging
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }
}
