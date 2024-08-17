@extends('layouts.app')
@use('App\Models\User')

@section('content')
<h1>Blog Posts</h1>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Title</th>
          @if (in_array("admin", [Auth::user()->user_role]))
            <th scope="col">Author</th>
          @endif
          <th scope="col">Created</th>
          <th scope="col">Modified</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>
              <a href="{{ route(Auth::user()->user_role.'.posts.show', $post->id) }}">{{ $post->title }}</a>
            </td>
            @if (in_array("admin", [Auth::user()->user_role]))
              <td>
                <a href="{{ route('admin.users.show', $post->user_id) }}">
                  {{ User::find($post->user_id)->name }}
                </a>
              </td>
            @endif
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <a href="{{ route(Auth::user()->user_role.'.posts.create') }}" class="btn btn-primary">Create Post</a>
@endsection