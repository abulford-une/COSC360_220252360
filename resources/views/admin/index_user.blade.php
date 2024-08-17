@extends('layouts.app')

@section('content')
  <h1>Blog Users</h1>
  <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
  <ul>
    @foreach ($users as $user)
      <li>
        <a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name.' | '.$user->user_role }}</a>
      </li>
    @endforeach
  </ul>
@endsection