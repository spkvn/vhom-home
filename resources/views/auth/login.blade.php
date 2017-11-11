@extends('layouts.admin')

@section('content')
<div class="columns large-4 medium-2 small-0"></div>
<div class="columns large-4 medium-8 small-12">
    <h1>Log In</h1>
    {!! Form::open(['url' => 'login', 'method' => 'POST']) !!}
    {!! Form::token() !!}

    {!! Form::label('email','Email Address') !!}
    {!! Form::text('email', 'example@email.com') !!}
    {!! $errors->first('email', '<span class="form-error is-visible">:message</span>') !!}

    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
    {!! $errors->first('email', '<span class="form-error is-visible">:message</span>') !!}

    {!! Form::submit('Log In', ['class'=>'button']) !!}

    {!! Form::close() !!}
    <a href="{{route('register')}}" class="button">Register</a>
</div>
<div class="columns large-4 medium-2 small-0"></div>
@endsection
