<!-- Footer Start -->
<div class="col-md-12 page-body margin-top-50 footer">
    <footer>
       <ul class="menu-link">
           @foreach ($category as $key => $data)
       <li><a href="#">{{ $data->cate_name ."." }}</a></li>     
           @endforeach
          
       </ul>
       <p>© Copyright 2020 DevBlog. All rights reserved</p>
       <!-- UiPasta Credit Start -->
       <div class="uipasta-credit">Design By <a href="#" target="_blank">Hải Lê</a></div>
       <!-- UiPasta Credit End -->
    </footer>
 </div>
 <!-- Footer End -->