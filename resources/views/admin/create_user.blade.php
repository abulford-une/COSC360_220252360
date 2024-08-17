@extends('layouts.app')

@section('content')
  <h1>Blog User Create</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{ route('admin.users.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="user_role">Role</label>
      <select name="user_role" id="user_role" class="form-control" required>
        <option value="user">User</option>
        <option value="author">Author</option>
      </select>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" required></input>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" required></input>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" required></input>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection