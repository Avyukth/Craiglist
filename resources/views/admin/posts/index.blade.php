@extends('layouts.admin')

@section('content')
    <h1>posts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>USE</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>created At</th>
            <th>updated At</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->category_type}}</td>
{{--                    <td>{{$post->photo_id}}</td>--}}
                    <th><img height ="50" src="{{$post->photo ? $post->photo->file : 'no user photo'}}"></th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop

