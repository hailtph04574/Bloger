<div class="col-md-12 page-body margin-top-50 footer">
    <nav>
       <ul class="menu-link">
          @foreach ($category as $item => $data)
       <li><a href="#">{{"." . $data->cate_name . "." }}</a></li>    
          @endforeach
          
       </ul>
    </nav>
 </div>