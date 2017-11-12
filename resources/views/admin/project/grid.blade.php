@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="columns small-12">
            <h2>Projects</h2>
            <a class="button" href="{{route('admin.project.create')}}"> Create </a>
        </div>
        <div class="row small-up-2 medium-up-3">
            @forelse($records as $record)
                <div class="columns">
                    <div class="card">
                        <img src="{{asset($record->image_path)}}" alt="">
                        <div class="card-section">
                            <p>{{$record->title}}</p>
                            <p> {{str_limit($record->description,255) }}</p>
                        </div>
                        <div class="card-divider">
                            <a class="button" href="{{route($base.'.edit', $record)}}">Edit</a>
                            {!! Html::delete($base.'.destroy', $record->id) !!}
                        </div>
                    </div>
                </div>
            @empty
                <p>No Projects. <a href="{{route($base.'.create')}}">Create One?</a></p>
            @endforelse
        </div>
        @include('admin._partials.delete')
    </div>
@endsection