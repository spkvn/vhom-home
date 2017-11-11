<?php

namespace VhomHome\Services;

use VhomHome\Http\Requests\ProjectRequest;
use VhomHome\Models\Project;

class ProjectService
{
    public static function save(Project $project = null, ProjectRequest $projectRequest = null)
    {
        if($project == null)
        {
            $project = new Project();
        }

        if($projectRequest != null)
        {
            $image = $projectRequest->file('image');
            $slug = str_slug(request('title'));
            $filename = $slug.".".$image->getClientOriginalExtension();
            $image->storeAs('public/projects',$filename);

            $project->image_path = 'storage/projects/'.$filename;
        }

        $project->title = request('title');
        $project->slug = str_slug(request('title'));
        $project->description = request('description');
        $project->body = request('body');
        $project->active = 1;

        $project->save();

        return true;
    }
}