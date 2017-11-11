@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="columns small-12 centered">
        <h1>Register</h1>
        {!! Form::open(['url' => 'register', 'method' => 'POST']) !!}
        {!! Form::token() !!}

        {!! Form::label('name','Name') !!}
        {!! Form::text('name', old('name')) !!}
        {!! $errors->first('name', '<span class="form-error is-visible">:message</span>') !!}

        {!! Form::label('email','Email Address') !!}
        {!! Form::text('email', old('email')) !!}
        {!! $errors->first('email', '<span class="form-error is-visible">:message</span>') !!}

        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
        {!! $errors->first('password', '<span class="form-error is-visible">:message</span>') !!}

        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation') !!}

        {!! Form::submit('Register', ['class'=>'button']) !!}

        {!! Form::close() !!}
        <a href="{{route('login')}}" class="button">Log In</a>
    </div>
</div>
@endsection