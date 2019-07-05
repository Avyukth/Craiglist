@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Edit user</div>

                    <div class="card-body">
{{--                        <div class="row">--}}
                            <div class="col-sm-3">
                                <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/40x40'}}" alt="" class="img-responsive img-rounded">
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
                                    {!! Form::submit('Modify User',['class'=>'btn  btn-primary']) !!}
                                </div>


                                {!! Form::close() !!}

                                {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$user->id],'class'=>'pull-right']) !!}


                                <div class="form-group">
                                    {!! Form::submit('Delete  User',['class'=>'btn  btn-danger']) !!}
                                </div>


                                {!! Form::close() !!}



                            </div>
{{--                        </div>--}}
{{--                        <div class="row">--}}
                            @include('includes.form_error')
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

