@extends('layouts.admin.edit')

@section('formContent')
    <div class="row">
        <div class="columns small-12">
            <h1>Add / Edit Tag</h1>
        </div>
        <div class="columns small-12">
            <div class="form__row">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name',
                        (isset($record) ? $record->name : null ),
                        [
                            'placeholder' => 'Enter Name',
                            'class' => ($errors->has('name') ? 'is-invalid-input' : '')
                        ]
                    )
                !!}
                {!! $errors->first('name', '<span class="form-error is-visible">:message</span>') !!}
            </div>
        </div>
    </div>
@endsection
