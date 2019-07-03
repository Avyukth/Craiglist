@extends('layouts.admin')

@section('content')
    <h1>users</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>

                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->created_at}}</td>
                      <td>{{$user->updated_at}}</td>
                  </tr>
                @endforeach
          @endif
        </tbody>
    </table>

@stop
{{--<h1>working</h1>--}}
