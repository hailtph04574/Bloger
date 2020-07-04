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
               @include('layouts/user-p')   
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