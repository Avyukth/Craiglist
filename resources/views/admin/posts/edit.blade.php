@extends('layouts.admin')

@section('content')
    <h1> Create user</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}


    <div class="form-group">

        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('email','Email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',[''=>'']+$roles,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('mobile','Mobile') !!}
        {!! Form::text('mobile_no',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
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

