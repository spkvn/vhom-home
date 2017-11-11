@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="columns medium-2 small-12">
            <h2>Projects</h2>
            <a class="button" href="{{route('admin.project.create')}}"> Create </a>
        </div>
        <div class="columns medium-10 small-12">
            @forelse($projects as $project)
                <h1>$project->title</h1>
            @empty
                <h2>No Projects.</h2>
            @endforelse
        </div>
    </div>
@endsection