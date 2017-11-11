<?php

namespace VhomHome\Services;

use VhomHome\Http\Requests\ProjectRequest;
use VhomHome\Models\Project;

class ProjectService
{
    public static function save(ProjectRequest $projectRequest)
    {
        $path = $projectRequest->file('image')->store('projects/');

        $project = new Project();

        $project->image_path = $path;
        $project->title = $projectRequest->input('title');
        $project->slug = str_slug($projectRequest->input('title'));
        $project->description = $projectRequest->input('description');
        $project->body = $projectRequest->input('body');
        $project->active = 1;

        $project->save();

        return true;
    }
}