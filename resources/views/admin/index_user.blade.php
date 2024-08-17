@extends('layouts.app')

@section('content')
  <h1>Blog Users</h1>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Role</th>
          <th scope="col">Email</th>
          <th scope="col">Created</th>
          <th scope="col">Modified</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>
              <a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name }}</a>
            </td>
            <td>{{ $user->user_role }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
@endsection