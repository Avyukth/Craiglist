@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    {{--                            <div class="card-header">Create  UP</div>--}}


                    <div class="row justify-content-xl-center">
                        <a href="/admin/posts/create">
                            <div class="form-group">
                                {!! Form::submit('Create Post  ',['class'=>'btn  btn-primary']) !!}
                            </div>
                        </a>
                    </div>


                    {{--                            </div>--}}
                </div>
            </div>
        </div>
    </div>
    <h1>Posts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
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
                    <td>{{$post->sellOrBuy ? 'Sell' : 'Buy'}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop

