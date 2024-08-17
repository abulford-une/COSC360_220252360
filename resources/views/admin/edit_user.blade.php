@extends('layouts.app')

@section('content')
  <h1>Edit Blog User</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{ route('admin.users.update', [$user->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group" style="display:none">
      <label for="id">User ID</label>
      <input type="text" name="id" value={{ $user->id }} class="form-control" required></input>
    </div>
    <div class="form-group">
      <label for="user_role">Role</label>
      <select name="user_role" id="user_role" class="form-control" required>
        <option value="user">User</option>
        <option value="author" selected>Author</option>
      </select>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" value={{ $user->name }} class="form-control" required></input>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" value={{ $user->email }} class="form-control" required></input>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection