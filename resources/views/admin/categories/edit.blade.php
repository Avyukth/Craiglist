@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Create Category</div>

                    <div class="card-body">

                        {!! Form::model($categories,['method'=>'PATCH','action'=>['AdminCategoryController@update', $categories->id]]) !!}

                        <div class="form-group">

                            {!! Form::text('category_type',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Modify Category',['class'=>'btn  btn-primary col-sm-6']) !!}
                        </div>


                        {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoryController@destroy',$categories->id],'class'=>'pull-right']) !!}


                        <div class="form-group">
                            {!! Form::submit('Delete  Category',['class'=>'btn  btn-danger col-sm-6']) !!}
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

