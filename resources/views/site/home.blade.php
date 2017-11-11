@extends('layouts.site')
@section('content')
    <div class="row expanded site__main__img">
        <div class="row content__wrapper">
            <div class="row">
                <div class="columns small-12">
                    <h1>Kevin's Projects</h1>
                </div>
            </div>
            @foreach($projects as $project)
            <div class="row project__row">
                <div class="columns small-7">
                    <h1>{{$project->title}}</h1>
                    <p>{{$project->description}}</p>
                </div>
                <div class="columns small-5">
                    <div class="project__image__container">
                        <img class="project__image" src="{{asset($project->image_path)}}">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection