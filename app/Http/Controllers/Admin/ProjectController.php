<?php

namespace VhomHome\Http\Controllers\Admin;

use Illuminate\Http\Request;
use VhomHome\Models\Project;
use VhomHome\Models\Tag;
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
            ->with('records', $projects)
            ->with('base', $this->base);
    }

    public function create()
    {
        return view('admin.project.edit')
            ->with('base', $this->base);
    }

    public function edit(Project $project)
    {
        $tags = Tag::all()->pluck('name');
        $relatedTags = $project->tags()->pluck('name');
       // dd($relatedTags);
        return view('admin.project.edit')
            ->with('record', $project)
            ->with('base', $this->base)
            ->with('tags', $tags)
            ->with('relatedTags', $relatedTags);
    }

    public function store(ProjectRequest $request)
    {
        if(ProjectService::save(null, $request))
        {
            return redirect()
                ->route('admin.project.index');
        }
    }

    public function update(Project $project, ProjectRequest $request)
    {
        if(ProjectService::save($project,$request))
        {
            return redirect()
                ->route('admin.project.index');
        }
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}
