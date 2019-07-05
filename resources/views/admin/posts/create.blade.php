@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Create Post</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>true]) !!}


                        <div class="form-group">

                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('user_id','User ID') !!}
                            {!! Form::text('user_id',null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">

                            {!! Form::label('body','Post Description') !!}
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('category_id','Post category:') !!}
                            {!! Form::select('category_id',[''=>'']+$category,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">

                            {!! Form::label('sellOrBuy','Ad Type:') !!}
                            {!! Form::select('sellOrBuy',['0'=>'Sell','1'=>'Buy'],['class'=>'form-control']) !!}
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
                            {!! Form::submit('Create post',['class'=>'btn  btn-primary']) !!}
                        </div>


                        {!! Form::close() !!}


                        @include('includes.form_error')

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

