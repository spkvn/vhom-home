@extends('layouts.site')
@section('content')
    <div class="row expanded site__main__img">
        <div class="main__img__flex">
            <h1>Kevin's Projects</h1>
        </div>
    </div>

    <div class="row expanded projects__row" style="background:black;">
        <div class="row">
            <div class="columns small-12">
                <h1>Projects</h1>
                <p>Here are some of the projects I've worked on. </p>
            </div>
            <hr>
        </div>
        @foreach($projects as $project)
            <div class="row project__div ">
                <div class="columns small-7">
                    <h2>{{$project->title}}</h2>
                    <p>{{$project->description}}</p>
                </div>
                <div class="columns small-5">
                    <div class="project__image__container">
                        <img src="{{asset($project->image_path)}}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{--<div class="row expanded site__main__img">--}}
        {{--<div class="row content__wrapper">--}}
            {{--<div class="row">--}}
                {{--<div class="columns small-12">--}}
                    {{--<h1>Kevin's Projects</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@foreach($projects as $project)--}}
            {{--<div class="row project__row">--}}
                {{--<div class="columns small-7">--}}
                    {{--<h1>{{$project->title}}</h1>--}}
                    {{--<p>{{$project->description}}</p>--}}
                {{--</div>--}}
                {{--<div class="columns small-5">--}}
                    {{--<div class="project__image__container">--}}
                        {{--<img class="project__image" src="{{asset($project->image_path)}}">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection