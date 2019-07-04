@extends('layouts.app')

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
            <th>SELL/BUY</th>
            <th>Price</th>
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
                    <th><img height ="50" src="{{$post->photo ? $post->photo->file : 'no user photo'}}"></th>
                    <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
{{--                    <td>{{$post->title}}</td>--}}
                    <td>{{$post->body}}</td>
                    <td>{{$post->sell_or_buy ? 'Sell' : 'Buy'}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop

