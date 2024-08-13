@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update', [$post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group" style="display:none">
            <label for="id">Post ID</label>
            <input type="text" name="id" value={{ $post->id }} class="form-control" required></input>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value={{ $post->title }} class="form-control" required></input>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection