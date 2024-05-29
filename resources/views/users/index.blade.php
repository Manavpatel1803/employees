@extends('layouts.main')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
</div> 
<div class="card mx-auto">
    <div>
    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
    @endif
</div>
    <div class="card-header">
        <a href=" {{ route('users.create') }} " class="float-right">Create</a>
</div>
<div class="card-body">
    <div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{ $user->username}}</td>
        <td>{{ $user->email}}</td>
        <td>Edit/Delete</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
</div>

@endsection