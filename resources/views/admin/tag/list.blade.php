@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="columns small-12">
            <h2>Tags</h2>
            <a class="button" href="{{route('admin.tag.create')}}"> Create </a>
        </div>
        <div class="columns small-12">
            <table class="hover">
                <tr style="text-align:left;">
                    <th>ID</th>
                    <th>Tag</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @forelse($records as $record)
                    <tr>
                        <td>{{$record->id}}</td>
                        <td>{{$record->name}}</td>
                        <td><a class="button" href="{{route($base.'.edit', $record)}}">Edit</a></td>
                        <td>{!! Html::delete($base.'.destroy', $record->id) !!}</td>
                    </tr>
                @empty
                    <tr>
                        <td></td>
                        <td>No Tags</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse
            </table>
        </div>
        @include('admin._partials.delete')
    </div>
@endsection