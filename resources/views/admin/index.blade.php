@extends('app')
@section('title','Index Admin')
@section('content')
<div id="wrapper">
   <div class="main-content container">

   <div class="prj-list row">
			<div class="col-lg-6 col-md-6 col-xs-12 margin-bottom-30">
				<a href="{{ route('post.index') }}" class="prj-item">
					<div class="top-project-section">
						<div class="project-icon">
							<img src="{{ asset('images/logo/logo-1.png') }}" alt="">
						</div>
						<h3>POST</h3>
						<div class="meta">
							<p class="author">
								<!-- by <span>Bold Meida</span> -->
							</p>
						</div>
					</div>
					<div class="bottom-project-section">
						<div class="meta">
							<div class="points">
								<b>>> Hiện có {{ count($post) }} bài viết</b>
							</div>
							<div class="views">
								<!-- <i class="fa fa-eye"></i> 40.6k -->
							</div>
							<!-- <span class="feedable-time timeago">2 years ago</span> -->
						</div>
					</div>
				</a>
			</div>
			<!-- .col-lg-4 col-md-6 project-item -->
            <div class="prj-list row">
			<div class="col-lg-6 col-md-6 col-xs-12 margin-bottom-30">
				<a href="{{ route('user.index') }}" class="prj-item">
					<div class="top-project-section">
						<div class="project-icon">
							<img src="{{ asset('images/logo/logo-2.png') }}" alt="Post">
						</div>
						<h3>USER</h3>
						<div class="meta">
							<p class="author">
								<!-- by <span>Bold Meida</span> -->
							</p>
						</div>
					</div>
					<div class="bottom-project-section">
						<div class="meta">
							<div class="points">
								<b>>> Hiện có {{ count($user) }} người dùng</b>
							</div>
							<div class="views">
								<!-- <i class="fa fa-eye"></i> 40.6k -->
							</div>
							<!-- <span class="feedable-time timeago">2 years ago</span> -->
						</div>
					</div>
				</a>
			</div>
			<!-- .col-lg-4 col-md-6 project-item -->
            <div class="prj-list row">
			<div class="col-lg-6 col-md-6 col-xs-12 margin-bottom-30">
				<a href="{{ route('category.index') }}" class="prj-item">
					<div class="top-project-section">
						<div class="project-icon">
							<img src="{{ asset('images/logo/logo-5.png') }}" alt="Category">
						</div>
						<h3>CATEGORY</h3>
						<div class="meta">
							<p class="author">
								<!-- by <span>Bold Meida</span> -->
							</p>
						</div>
					</div>
					<div class="bottom-project-section">
						<div class="meta">
							<div class="points">
								<b>>> Hiện có {{ count($category) }} bài viết</b>
							</div>
							<div class="views">
								<!-- <i class="fa fa-eye"></i> 40.6k -->
							</div>
							<!-- <span class="feedable-time timeago">2 years ago</span> -->
						</div>
					</div>
				</a>
			</div>
			<!-- .col-lg-4 col-md-6 project-item -->
            <div class="prj-list row">
			<div class="col-lg-6 col-md-6 col-xs-12 margin-bottom-30">
				<a href="{{ route('comment.index') }}" class="prj-item">
					<div class="top-project-section">
						<div class="project-icon">
							<img src="{{ asset('images/logo/logo-3.png') }}" alt="">
						</div>
						<h3>COMMENT</h3>
						<div class="meta">
							<p class="author">
								<!-- by <span>Bold Meida</span> -->
							</p>
						</div>
					</div>
					<div class="bottom-project-section">
						<div class="meta">
							<div class="points">
								<b>>> Hiện có {{ count($comment) }} bài viết</b>
							</div>
							<div class="views">
								<!-- <i class="fa fa-eye"></i> 40.6k -->
							</div>
							<!-- <span class="feedable-time timeago">2 years ago</span> -->
						</div>
					</div>
				</a>
			</div>
			<!-- .col-lg-4 col-md-6 project-item -->

   </div>
   <!-- /.main-content -->
</div>
<!--/#wrapper -->
@endsection
