<div class="col-md-12 page-body margin-top-50 footer">
    <nav>
       <ul class="menu-link">
          @foreach ($category as $data)
       <li><a href="#">
       {{"."}}
       @foreach($data->categorys as $item)
        {{ $item->cate_name }}
       @endforeach
       {{"." }}
       </a></li>    
          @endforeach
          
       </ul>
    </nav>
 </div>