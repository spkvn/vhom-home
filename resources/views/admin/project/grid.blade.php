@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="columns medium-2 small-12">
            <h2>Projects</h2>
            <a class="button" href="{{route('admin.project.create')}}"> Create </a>
        </div>
        <div class="columns medium-10 small-12 project__div">
            @forelse($projects as $project)
                <div class="columns small-12">
                    <div class="project__image__container">
                        <img class="project__image" src="{{asset($project->image_path)}}">
                    </div>
                    <h2>{{$project->title}}</h2>
                    <p>{{$project->description}}</p>
                    <a class="button" href="{{route('admin.project.edit', $project->id)}}">Edit</a>
                </div>
            @empty
                <h2>No Projects.</h2>
            @endforelse
        </div>
    </div>
@endsection