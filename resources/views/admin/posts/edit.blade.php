@extends('layouts.app')

@section('content')
    <h1> Edit Posts</h1>
    <div class="row">
        <div class="col-sm-3">
            <img height="50" src="{{$posts->photo ? $posts->photo->file : 'http://placehold.it/40x40'}}" alt="" class="img-responsive img-rounded">
        </div>

        <div class="col-sm-9">

            {!! Form::model($posts,['method'=>'PATCH','action'=>['AdminPostController@update', $posts->id],'files'=>true]) !!}

            <div class="form-group">

                {!! Form::label('title','Title') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('user_id','Title') !!}
                {!! Form::text('user_id',null,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">

                {!! Form::label('body','body') !!}
                {!! Form::text('body',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('category_id','Role:') !!}
                {!! Form::select('category_id',[''=>'']+$category,null,['class'=>'form-control']) !!}
            </div>



            <div class="form-group">

                {!! Form::label('photo_id','Photo') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Modify post',['class'=>'btn  btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['AdminPostController@destroy',$posts->id],'class'=>'pull-right']) !!}


            <div class="form-group">
                {!! Form::submit('Delete  post',['class'=>'btn  btn-danger']) !!}
            </div>


            {!! Form::close() !!}



        </div>
    </div>
    <div class="row">
        @include('includes.form_error')
    </div>

@stop

