<?php

namespace VhomHome\Services;

use VhomHome\Http\Requests\ProjectRequest;
use VhomHome\Models\Project;
use VhomHome\Models\Tag;

class ProjectService
{
    public static function save(Project $project = null, ProjectRequest $projectRequest = null)
    {
        if($project == null)
        {
            $project = new Project();
        }

        $image = $projectRequest->file('image');
        if($image != null)
        {
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
        $project->project_url = request('project_url');

        $project->save();
        self::handleTags(request('tags'), $project);

        return true;
    }

    private static function handleTags($tags, $project)
    {
        //delete all taggable records for this project
        $project->tags()->detach();

        //get tags from the input
        $tags = explode(',', $tags);

        foreach($tags as $tag)
        {
            $tag = Tag::find($tag)->first();
            $tag->projects()->save($project);
        }
    }
}