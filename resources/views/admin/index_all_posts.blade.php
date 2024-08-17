@extends('layouts.app')

@section('content')
<a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create Post</a>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
      </li>
    @endforeach
  </ul>
@endsection