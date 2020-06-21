@extends('app')
@section('title','DEV-S NEWS')
@section('content')
<!-- Blog Post (Right Sidebar) Start -->
<div class="col-md-9">
    <div class="col-md-12 page-body">
       <div class="row">
          <div class="sub-title">
             <h2>My Blog</h2>
             <a href="#"><i class="icon-envelope"></i></a>
          </div>
          <div class="col-md-12 content-page">
              @foreach ($post as $key => $data)
                  <!-- Blog Post Start -->
             <div class="col-md-12 blog-post">
                <div class="post-title">
                   <a href="#">
                   <h1>{{ $data->title }}</h1>
                   </a>
                </div>
                <div class="post-info">
                <span>{{ $data->created_at }} / by <a href="#" target="_blank"> {{ $data->name }} have id = {{ $data->user_id }}</a></span>
                </div>
            <p>{{ $data->content }}</p>
                <a href="#" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
             </div>
             <!-- Blog Post End -->
              @endforeach
             
             
             <div class="col-md-12 text-center">
                <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                <div id="post-end-message"></div>
             </div>
          </div>
       </div>
       <!-- Subscribe Form Start -->
       <div class="col-md-8 col-md-offset-2">
          <form id="mc-form" method="post" action="#">
              @csrf
             <div class="subscribe-form margin-top-20">
                <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                <button class="submit-btn" type="submit">Submit</button>
             </div>
             <p>Subscribe to my weekly newsletter</p>
             <label for="mc-email" class="mc-label"></label>
          </form>
       </div>
       <!-- Subscribe Form End -->
    </div>
    @include('layouts/footer')
 </div>
 <!-- Blog Post (Right Sidebar) End -->
@endsection