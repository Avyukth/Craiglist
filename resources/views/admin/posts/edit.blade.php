@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Edit Post</div>


                    <div class="col-sm-3">
                        <img height="50" src="{{$posts->photo ? $posts->photo->file : 'http://placehold.it/40x40'}}"
                             alt="" class="img-responsive img-rounded">
                    </div>

                    <div class="col-sm-9">

                        {!! Form::model($posts,['method'=>'PATCH','action'=>['AdminPostController@update', $posts->id],'files'=>true]) !!}

                        <div class="form-group">

                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('users_id','Title') !!}
                            {!! Form::text('users_id',null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">

                            {!! Form::label('body','Post Details') !!}
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('category_id','Post Category:') !!}
                            {!! Form::select('category_id',[''=>'']+$category,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">

                            {!! Form::label('sellOrBuy','Ad Type:') !!}
                            {!! Form::select('sellOrBuy',['0'=>'Sell','1'=>'Buy'],null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('price','Price:') !!}
                            {!! Form::text('price',null,['class'=>'form-control']) !!}
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
                    @include('includes.form_error')


                </div>
            </div>
        </div>
    </div>
    </div>

@stop

