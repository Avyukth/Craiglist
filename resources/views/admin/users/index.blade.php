@extends('layouts.app')

@section('content')
    <h1>users</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th>created At</th>
            <th>updated At</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
                @foreach($users as $user)
                  <tr>
                      <td>{{$user->id}}</td>
                      <th><img height ="50" src="{{$user->photo ? $user->photo->file : 'no user photo'}}"></th>

                      <td>{{$user->role->name}}</td>
                      <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->created_at}}</td>
                      <td>{{$user->updated_at}}</td>
                  </tr>
                @endforeach
          @endif
        </tbody>
    </table>

@stop

