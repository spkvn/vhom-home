<?php

namespace VhomHome\Http\Controllers\Admin;

use Illuminate\Http\Request;
use VhomHome\Models\Project;
use VhomHome\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.grid')
            ->with('projects', $projects);
    }
}
