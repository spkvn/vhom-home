@extends('layouts.admin.edit')


@section('formContent')
    <div class="row">
        <div class="columns large-12">
            <h1>Add / Edit Project</h1>
        </div>
        <div class="columns large-12">
            <fieldset>

                <div class="form__row">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title',
                            (isset($record) ? $record->title : null ),
                            [
                                'placeholder' => 'Enter Title',
                                'class' => ($errors->has('title') ? 'is-invalid-input' : '')
                            ]
                        )
                    !!}
                    {!! $errors->first('title', '<span class="form-error is-visible">:message</span>') !!}
                </div>

                <div class="form__row">
                    {!! Form::label('project_url', 'Project URL:') !!}
                    {!! Form::text('project_url',
                            (isset($record) ? $record->project_url : null ),
                            [
                                'placeholder' => 'Enter Project URL',
                                'class' => ($errors->has('project_url') ? 'is-invalid-input' : '')
                            ]
                        )
                    !!}
                    {!! $errors->first('project_url', '<span class="form-error is-visible">:message</span>') !!}
                </div>

                <!-- selectize input -->
                {!! Form::label('tags','Tags:') !!}
                <input type="text" name="tags" id="tags">

                <div class="form__row">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::textarea('description',
                            (isset($record) ? $record->description : null ),
                            [
                                'placeholder' => 'Enter Description',
                                'class' => ($errors->has('description') ? 'is-invalid-input' : '')
                            ]
                        )
                    !!}
                    {!! $errors->first('description', '<span class="form-error is-visible">:message</span>') !!}
                </div>

                <div class="form__row">
                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::textarea('body',
                            (isset($record) ? $record->body : null ),
                            [
                                'placeholder' => 'Enter Body',
                                'class' => ($errors->has('body') ? 'is-invalid-input' : '')
                            ]
                        )
                    !!}
                    {!! $errors->first('body', '<span class="form-error is-visible">:message</span>') !!}
                </div>

                <div class="form__row">
                    {!! Form::label('image', 'Image:') !!}
                    {!! Form::file('image',
                            null,
                            [
                                'class' => ($errors->has('image') ? 'is-invalid-input' : '')
                            ]
                        )
                    !!}
                    {!! $errors->first('image', '<span class="form-error is-visible">:message</span>') !!}
                </div>
            </fieldset>
        </div>
    </div>

    <!--Selectize dataset -->
    @if(isset($tags))
    <script>
        var tags = [
            @foreach ($tags as $tag)
            {
                tag: "{{$tag->name}}",
                value: "{{$tag->id}}"
            },
            @endforeach
        ];

        $(function(){
            $('#tags').selectize({
                delimiter: ',',
                persist: false,
                valueField: 'value',
                labelField: 'tag',
                searchField: 'tag',
                options: tags,
                create: function(input) {
                    return {
                        tag: input,
                        value: input
                    }
                }
            });

            @if(isset($relatedTags))
                @foreach($relatedTags as $relatedTag)
            $('#tags')[0].selectize.addItem({{$relatedTag->id}});
                @endforeach
            @endif
        });
    </script>
    @endif
@endsection