@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Create Category</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'POST','action'=>'AdminCategoryController@store']) !!}


                        <div class="form-group">

{{--                            {!! Form::label('title','Title') !!}--}}
                            {!! Form::text('category_type',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Create Category',['class'=>'btn  btn-primary']) !!}
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">List Of Category</div>

                    <div class="card-body">
{{--                        <h1>category</h1>--}}
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($categories)
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
{{--                                        <td>{{$category->category_type}}</td>--}}
                                        <td><a href="{{route('categories.edit',$category->id)}}">{{$category->category_type}}</a></td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

