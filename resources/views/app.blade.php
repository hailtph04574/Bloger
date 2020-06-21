<!DOCTYPE html>
<html lang="en">
   @include('layouts/head')
   <body>
      <!-- Preloader Start -->
      <div class="preloader">
         <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      <div id="main">
         <div class="container">
            <div class="row">
               @include('layouts/navbar')
               <!-- About Me (Left Sidebar) Start -->
               <div class="col-md-3">
                  <div class="about-fixed">
                     <div class="my-pic">
                        <img src="{{ asset('images/pic/my-pic.png')}}" alt="">
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                        <div id="menu" class="collapse">
                           <ul class="menu-link">
                              <li><a href="about.html">About</a></li>
                              <li><a href="work.html">Work</a></li>
                              <li><a href="contact.html">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="my-detail">
                        <div class="white-spacing">
                           <h1>Alex Parker</h1>
                           <span>Web Developer</span>
                        </div>
                        <ul class="social-icon">
                           <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- About Me (Left Sidebar) End -->
               @yield('content')
            </div>
         </div>
      </div>
      <!-- Back to Top Start -->
      <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
      <!-- Back to Top End -->
      <!-- All Javascript Plugins  -->
      <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('js/plugin.js')}} "></script>
      <!-- Main Javascript File  -->
      <script type="text/javascript" src="{{ asset('js/scripts.js')}} "></script>
   </body>
</html>