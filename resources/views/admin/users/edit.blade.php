@extends('layouts.admin')

@section('content')
    <h1> Edit user</h1>

    <div class="col-sm-3">
{{--        <img src="{{}}$user->photo ? $user->photo->file : 'http://placehold.it/40x40'}}" alt="" class="img-responsive img-rounded">--}}
        <img height ="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">

        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUserController@update', $user->id],'files'=>true]) !!}

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
            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
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

    </div>

    @include('includes.form_error')

@stop

