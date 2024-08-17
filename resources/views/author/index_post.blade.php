@extends('layouts.app')

@section('content')
<h1>Blog Posts</h1>
  <a href="{{ route('author.posts.create') }}" class="btn btn-primary">Create Post</a>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{ route('author.posts.show', $post->id) }}">{{ $post->title }}</a>
      </li>
    @endforeach
  </ul>
@endsection