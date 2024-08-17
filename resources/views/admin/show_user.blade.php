@extends('layouts.app')

@section('content')
    <h1>Blog User Details</h1>
  <a href="{{ url()->previous() }}">Back</a>
  <ul>
    <li>ID: {{ $user->id }}</li>
    <li>Name: {{ $user->name }}</li>
    <li>Role: {{ $user->user_role }}</li>
    <li>Email: {{ $user->email }}</li>
  </ul>
  <form action="{{ route('admin.users.destroy', [$user->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    <button type="submit" class="btn btn-primary">Delete User</button>
  </form>
@endsection