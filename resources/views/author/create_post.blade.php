@extends('layouts.app')

@section('content')
<h1>Blog Post Create</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{ route(Auth::user()->user_role.'.posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" required></input>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection