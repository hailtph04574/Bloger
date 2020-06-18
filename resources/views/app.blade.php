
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css,font/style.css">
	<link rel="stylesheet" type="text/css" href="css,font/home.css">
	<link rel="stylesheet" type="text/css" href="css,font/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/backtotop.js"></script>
	<script type="text/javascript" src="css,font/bootstrap/js/bootstrap.min.js"></script>
	<link rel="short icon" href="img/favicon.ico">
</head>
<body>
	<section id="all">
		<section id="wrapper">
			@include('layouts/header')
      @include('layouts/navbar')
      @yield('content')
			<section class="container mt-5">
				<div class="row">
					<article class="col-md-9 col-sm-12 col-12 bg-light">
						<section id="last_new">
							<p class="text-dark border-left-3">LATEST NEWS</p>
						</section>

						<img src="img/4.jpg" id="img" style="margin-top: 20px;">
						<div class="row">
							<section id="content" class="col-md-2 col-sm-3 col-3">
								<p class="icon"><img src="img/time.png"><label>22 APRIL</label></p>
								<p class="icon1"><img src="img/user.png"><label>22,462</label></p>
								<p class="icon2"><img src="img/twitter.png" width="7px" height="7px;"><label>424</label></p>
								<p class="icon3"><img src="img/like.png"><label>771</label></p>
								<p class="icon4">READ MORE</p>
							</section>
							<section id="text" class="col-md-10 col-sm-9 col-9">
								<h1 class="border-left-3 pl-3"><a href="#">Call of Duty Black Ops 3 Annouced!</a></h1>
								<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</section>
						</div>

						<img src="img/5.png" id="img" style="margin-top: 20px;">
						<div class="row">
							<section id="content" class="col-md-2 col-sm-3 col-3">
								<p class="icon"><img src="img/time.png"><label>19 APRIL</label></p>
								<p class="icon1"><img src="img/user.png"><label>19,033</label></p>
								<p class="icon2"><img src="img/twitter.png" width="7px" height="7px;"><label>271</label></p>
								<p class="icon3"><img src="img/like.png"><label>290</label></p>
								<p class="icon4">READ MORE</p>
							</section>
							<section id="text" class="col-md-10 col-sm-9 col-9">
								<h1 class="border-left-3 pl-3"><a href="#">ES ORG WINS HALO CHAMPIONSHIP</a></h1>
								<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</section>
						</div>

						<img src="img/6.png" id="img" style="margin-top: 20px;">
						<div class="row">
							<section id="content" class="col-md-2 col-sm-3 col-3">
								<p class="icon"><img src="img/time.png"><label>11 APRIL</label></p>
								<p class="icon1"><img src="img/user.png"><label>28,000</label></p>
								<p class="icon2"><img src="img/twitter.png" width="7px" height="7px;"><label>491</label></p>
								<p class="icon3"><img src="img/like.png"><label>1,211</label></p>
								<p class="icon4">READ MORE</p>
							</section>
							<section id="text" class="col-md-10 col-sm-9 col-9">
								<h1 class="border-left-3 pl-3"><a href="#">WELCOME NOOB TO THE SMITE ROSTER</a></h1>
								<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</section>
						</div>

						<img src="img/7.png" id="img" style="margin-top: 20px;">
						<div class="row">
							<section id="content" class="col-md-2 col-sm-3 col-3">
								<p class="icon"><img src="img/time.png"><label>29 MAR</label></p>
								<p class="icon1"><img src="img/user.png"><label>41,283</label></p>
								<p class="icon2"><img src="img/twitter.png" width="7px" height="7px;"><label>2,382</label></p>
								<p class="icon3"><img src="img/like.png"><label>6,778</label></p>
								<p class="icon4">READ MORE</p>
							</section>
							<section id="text" class="col-md-10 col-sm-9 col-9">
								<h1 class="border-left-3 pl-3"><a href="#">A NEW LEAGUE OF LEGENDS TEAM RISES</a></h1>
								<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</section>
						</div>

						<img src="img/outlast2.jpg" id="img"  style="margin-top: 20px;">
						<div class="row">
							<section id="content" class="col-md-2 col-sm-3 col-3">
								<p class="icon"><img src="img/time.png"><label>29 MAR</label></p>
								<p class="icon1"><img src="img/user.png"><label>41,283</label></p>
								<p class="icon2"><img src="img/twitter.png" width="7px" height="7px;"><label>2,382</label></p>
								<p class="icon3"><img src="img/like.png"><label>6,778</label></p>
								<p class="icon4">READ MORE</p>
							</section>
							<section id="text" class="col-md-10 col-sm-9 col-9">
								<h1 class="border-left-3 pl-3"><a href="#" class="text-uppercase">Hell is an experiment you can't survive in Outlast</a></h1>
								<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</section>
						</div>

						<section class="d-flex justify-content-center mb-5 mt-5" id="paginate">
							<a href="#"><section id="left"></section></a>
							<a href="#"><section id="center"></section></a>
							<a href="#"><section id="right"></section></a>
						</section>
					</article>

					<!-- content right -->
					<aside class="col-md-3 col-sm-12 col-12">
						<section id="description" class="border-left-3">
							<p>SPONSORS</p>
						</section>
						<section id="sponsor">
							<img src="img/sponsors/scuf_gaming.png"><label>SCUF GAMING</label>
						</section>
						<section style="clear: both"></section>
						<section id="sponsors">
							<img src="img/sponsors/astro_gaming.png"><label>ASTRO GAMING</label>
						</section>
						<section style="clear: both"></section>
						<section id="sponsor">
							<img src="img/sponsors/monster_gaming.png"><label>MONSTER ENERGY</label>
						</section>
						<section style="clear: both"></section><br>

						<section id="description">
							<p class="border-left-3">LATEST VIDEO</p>
						</section><br>
						<img src="img/last_video/last_video.png" width="100%" height="150" class="img-fluid mb-3"><br>

						<section id="description">
							<p class="border-left-3">DIVISIONS</p>
						</section><br>
						<section id="division">
							<img src="img/divisions/call_of_duty.png"><label>CALL OF DUTY<br><a href="#">VIEW ROSTER</a></label>
						</section>
						<section style="clear: both"></section>
						<section id="division">
							<img src="img/divisions/halo.png"><label>HALO<br><a href="#">VIEW ROSTER</a></label>
						</section>
						<section style="clear: both"></section>
						<section id="division">
							<img src="img/divisions/smite.png"><label>SMITE<br><a href="#">VIEW ROSTER</a></label>
						</section>
						<section style="clear: both"></section>
						<section id="division">
							<img src="img/divisions/lol.png"><label>LEAGUE OF LEGENDS<br><a href="#">VIEW ROSTER</a></label>
						</section>
						<section style="clear: both"></section>
						<section id="division">
							<img src="img/divisions/csgo.png"><label>COUNTERSTRIKE<br><a href="#">VIEW ROSTER</a></label>
						</section>
						<section style="clear: both"></section><br>

						<section id="description">
							<p class="border-left-3">WE RECOMMEND</p>
						</section><br>
						<img src="img/we_recommend/phone_astro.png" width="100%" height="102" class="img-fluid">
						<img src="img/we_recommend/phone_kraken.png" width="100%" height="102" class="img-fluid mt-3 mb-3">

						<section id="description">
							<p class="border-left-3">GALLERY</p>
						</section><br>
						<section id="gallery" class="mb-3">
							<a href="#"><img src="img/gallery/aside12.png"></a>
							<a href="#"><img src="img/gallery/aside13.png"></a>
							<a href="#"><img src="img/gallery/aside14.png"></a>
							<a href="#"><img src="img/gallery/aside15.png"></a>
							<a href="#"><img src="img/gallery/aside16.png"></a>
							<a href="#"><img src="img/gallery/aside17.png"></a>
						</section>

						<section id="description">
							<p class="border-left-3">CURRENT STREAMS</p>
						</section><br>
						<img src="img/current_stream/lol.png" width="100%" height="80" class="img-fluid">
						<section id="streams_content">
							<label id="streams_title">SPUDDY</label>&emsp;<label id="playing"><a href="">PLAYING</a></label>&emsp;<label id="streams_name">LEAGUE OF LEGENDS</label>
						</section><br>

						<img src="img/current_stream/csgo.png" width="100%" height="80" class="img-fluid">
						<section id="streams_content">
							<label id="streams_title">SPUDDY</label>&emsp;<label id="playing"><a href="">PLAYING</a></label>&emsp;<label id="streams_name">COUNTERSTRIKE: GO</label>
						</section><br>

						<img src="img/current_stream/outlast.jpg" width="100%" height="80" class="img-fluid">
						<section id="streams_content">
							<label id="streams_title">SPUDDY</label>&emsp;<label id="playing"><a href="">PLAYING</a></label>&emsp;<label id="streams_name">OUTLAST</label>
						</section><br>

						<section id="description">
							<p class="border-left-3">FROM TWITTER</p>
						</section>
						<section style="clear: both"></section>
						<section id="twitter_content" class="row">
							<img src="img/from_twitter/aside20.png" class="col-md-3 col-sm-3">
							<label class="col-md-9 col-sm-9 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<br><br><i style="font-size:10px;">34 MINUTES AGO</i><a href="#">@DENIAL SPUDDY</a></label>
						</section>

						<section style="clear: both"></section>
						<section id="twitter_content" class="row">
							<img src="img/from_twitter/aside20.png" class="col-md-3 col-sm-3">
							<label class="col-md-9 col-sm-9 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<br><br><i style="font-size:10px;">1 HOUR AGO</i><a href="#">@DENIAL SPUDDY</a></label>
						</section>

						<section style="clear: both"></section>
						<section id="twitter_content" class="row">
							<img src="img/from_twitter/aside20.png" class="col-md-3 col-sm-3">
							<label class="col-md-9 col-sm-9 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.<br><br><i style="font-size:10px;">1 DAY AGO</i><a href="#">@DENIAL SPUDDY</a></label>
						</section>
					</aside>
				</div>
			</section>
      @include('layouts/footer')
		  </section>

	</section>

   	<button id="backtotop" title="Back to top"><i class="fas fa-angle-up"></i></button>

</body>
</html>
