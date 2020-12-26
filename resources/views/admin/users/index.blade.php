@extends('layouts\app')
@section ('content')
<a href="/posts" class="btn btn-default">Posts</a>
<div class="card">
<h1 class="float-left">Users</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
      <th scope="row">{{ $user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
          
      </td>
    </tr>
      @endforeach
    
  </tbody>
</table>

</div>
@endsection