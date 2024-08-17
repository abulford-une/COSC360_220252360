@extends('layouts.app')

@section('content')
<h1>Blog Post Details</h1>
  <a href="{{ url()->previous() }}">Back</a>
  <ul>
    <li>ID: {{ $post->id }}</li>
    <li>Title: {{ $post->title }}</li>
    <li>Content: {{ $post->content }}</li>
  </ul>
  <form action="{{ route(Auth::user()->user_role.'.posts.destroy', [$post->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <a href="{{ route(Auth::user()->user_role.'.posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
    <button type="submit" class="btn btn-primary">Delete Post</button>
  </form>
  {{-- <div class="container">
    <!-- Content here -->
    
  <div class="row d-flex justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-0 border" style="background-color: #f0f2f5;">
          <div class="card-body p-4">
              <a href="#">Back</a>
              <h4>Blog Post Details</h4>
              <div class="card mb-4">
                  <div class="card-body">
                    <p>1 - Post Title</p>
        
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <p>post content</p>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <p class="small mb-0 ms-2">Author: Ibrahim</p>
                      </div>
                    </div>
                  </div>
                </div>


            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
              <label class="form-label" for="addANote"><input type="submit" name="submit" class="mt-2"/> </label>
            </div>
    
            <div class="card mb-4">
              <div class="card-body">
                <p>Type your note, and hit enter to add it</p>
    
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                      height="25" />
                    <p class="small mb-0 ms-2">Martha</p>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection