<?php

namespace VhomHome\Http\Controllers\Admin;

use Illuminate\Http\Request;
use VhomHome\Models\Project;
use VhomHome\Http\Requests\ProjectRequest;
use VhomHome\Http\Controllers\Controller;
use VhomHome\Services\ProjectService;

class ProjectController extends Controller
{
    protected $base = "admin.project";

    public function index()
    {
        $projects = Project::all();
        return view('admin.project.grid')
            ->with('projects', $projects);
    }

    public function create()
    {
        return view('admin.project.edit')
            ->with('base', $this->base);
    }

    public function edit(Project $project)
    {
        return view('admin.project.edit')
            ->with('project',$project);
    }

    public function store(ProjectRequest $request)
    {
        if(ProjectService::save($request))
        {
            return redirect()
                ->route('admin.project.index');
        }
    }

    public function update(ProjectRequest $request)
    {
        dd('passed request validation');
    }

    public function delete(Project $project)
    {
        //nothing
    }
}
