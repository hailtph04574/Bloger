
@extends('viewad')
@section('title','ADMIN HOME')
@section('active','active')
{{-- user-card --}}
@section('content')
<div class="row align-items-center">
    <div class="col-sm-3">
        <div class="card">
          <div class="card-body p-4 py-5 text-center">
            <span class="avatar avatar-xl mb-4 bg-green-lt">USER</span>
            <p class=" bg-blue-lt">Now ! We are have {{ count($user) }} account</p>
            <p class="mb-3">
            </p>
            <div>
              <div class="avatar-list avatar-list-stacked">
              <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Add</a>
                <a href="{{ route('user.index') }}" class="btn btn-warning btn-sm">Edit</a>
              </div>
            </div>
          </div>
          <div class="progress card-progress">
            <div class="progress-bar bg-green" style="width: {{ count($user) }}%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="sr-only">{{ count($user) }}% Complete</span>
            </div>
          </div>
        </div>
      </div>
    
    {{-- post-card --}}
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body p-4 py-5 text-center">
            <span class="avatar avatar-xl mb-4 bg-pink-lt">POST</span>
            <p class=" bg-green-lt">Now ! We are have {{ count($post) }} bài viết</p>
            <p class="mb-3">
            </p>
            <div>
              <div class="avatar-list avatar-list-stacked">
              <a href="{{ route('post.create') }}" class="btn btn-success btn-sm">Add</a>
                <a href="{{ route('post.index') }}" class="btn btn-warning btn-sm">Edit</a>
              </div>
            </div>
          </div>
          <div class="progress card-progress">
            <div class="progress-bar bg-pink" style="width: {{ count($post) }}%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="sr-only">{{ count($post) }}% Complete</span>
            </div>
          </div>
        </div>
      </div>
{{-- category-card --}}
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body p-4 py-5 text-center">
            <span class="avatar avatar-xl mb-4 bg-indigo-lt">CATEGORY</span>
            <p class=" bg-pink-lt">Now ! We are have {{ count($category) }} thẻ</p>
            <p class="mb-3">
            </p>
            <div>
              <div class="avatar-list avatar-list-stacked">
              <a href="{{ route('category.create') }}" class="btn btn-danger btn-sm">Add</a>
                <a href="{{ route('category.index') }}" class="btn btn-warning btn-sm">Edit</a>
              </div>
            </div>
          </div>
          <div class="progress card-progress">
            <div class="progress-bar bg-indigo" style="width: {{ count($category) }}%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="sr-only">{{ count($category) }}% Complete</span>
            </div>
          </div>
        </div>
      </div>
    {{-- comment-card --}}
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body p-4 py-5 text-center">
            <span class="avatar avatar-xl mb-4 bg-yellow-lt">COMMENT</span>
            <p class=" bg-indigo-lt">Now ! We are have {{ count($comment) }} bình luận</p>
            <p class="mb-3">
            </p>
            <div>
              <div class="avatar-list avatar-list-stacked">
              <a href="{{ route('comment.create') }}" class="btn btn-primary btn-sm">Add</a>
                <a href="{{ route('comment.index') }}" class="btn btn-warning btn-sm">Edit</a>
              </div>
            </div>
          </div>
          <div class="progress card-progress">
            <div class="progress-bar bg-yellow" style="width: {{ count($comment) }}%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="sr-only">{{ count($comment) }}% Complete</span>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
