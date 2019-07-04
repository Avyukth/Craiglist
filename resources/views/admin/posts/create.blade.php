@extends('layouts.app')

@section('content')
    <h1> Create Post</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>true]) !!}


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
        {!! Form::submit('Create post',['class'=>'btn  btn-primary']) !!}
    </div>


    {!! Form::close() !!}


    @include('includes.form_error')

@stop

