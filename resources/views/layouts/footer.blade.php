<!-- Footer Start -->
<div class="col-md-12 page-body margin-top-50 footer">
    <footer>
       <ul class="menu-link">
           @foreach ($category as $key => $data)
       <li><a href="#">
       @foreach($data->categorys as $item)
        {{ $item->cate_name }}
       @endforeach
       </a></li>     
           @endforeach
          
       </ul>
       <p>© Copyright 2020 DevBlog. All rights reserved</p>
       <!-- UiPasta Credit Start -->
       <div class="uipasta-credit">Design By <a href="#" target="_blank">HaiLe</a></div>
       <!-- UiPasta Credit End -->
    </footer>
 </div>
 <!-- Footer End -->