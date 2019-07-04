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
                <div class="form-group">
                    <a href="/admin/posts"><button>Browse</button></a>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="form-group">
                    <a href="/admin/posts/create"><button>Create</button></a>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
