@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="card">
                <div class="card-header">Advertisement</div>

                <div class="row justify-content-center">
                    <a href="/admin/posts">
                        <div class="form-group">
                            {!! Form::submit('Browse Post',['class'=>'btn  btn-primary']) !!}
                        </div>
                    </a>
                </div>
                <div class="row justify-content-center">

                    <a href="/admin/posts/create">
                        <div class="form-group">
                            {!! Form::submit('Create Post',['class'=>'btn  btn-primary']) !!}
                        </div>
                    </a>

                </div>

                <div class="row justify-content-center">

                    <a href="/admin/categories">
                        <div class="form-group">
                            {!! Form::submit('view Post Categories ',['class'=>'btn  btn-primary']) !!}
                        </div>
                    </a>

                </div>
                <div class="row justify-content-center">
                    <a href="/admin/posts">
                        <div class="form-group">
                            {!! Form::submit('Browse post By Categories ',['class'=>'btn  btn-primary']) !!}
                        </div>
                    </a>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
