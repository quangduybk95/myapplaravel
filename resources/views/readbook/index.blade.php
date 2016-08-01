@extends('templates.readform')
@section('content')
<!-- left -->
<div class = "main-index">
  <div class="row ">
  <div class="col-xs-12 col-sm-12 col-md-3">     
      <div class="panel panel-info text-center">
        <div class="panel-heading"><a href="index.php"><h4>Trang chủ</a></h4></div>
        <div class="panel-body danhmuc">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#">  Truyện Mới Nhất </a></li>
            <li><a href="#">  Truyện Hay Nhất</a></li>
            <li><a href="#">  Truyện Hot Nhất</a></li>
            <li><a href="#">  Truyện Ngẫu Nhiên</a></li>
          </ul>
        </div>
      </div> 
      <hr>
      <br>
      <div class="panel panel-info danhmuc text-center">
       <div class="panel-heading"><a href="#"><h4>Thể Loại</a></h4></div>
       <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">  Truyện loại 1</a></li>
          <li><a href="#">  Truyện loại 2</a></li>
          <li><a href="#">  Truyện loại 3</a></li>
          <li><a href="#">  Truyện loại 4</a></li>
          <li><a href="#">  Truyện loại 5</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- right-->
  <div class="col-xs-12 col-md-9 col-sm-12">
    <div class="panel panel-info">
      <div class="panel-heading text-center"><h4>Truyện mới</h4></div>
      <div class="panel-body">

       @for ($j = 0; $j < 4; $j++)
       <div class="row hang">
         @for ($i = 0; $i < 6; $i++)
         <div class="col-xs-12 col-md-2 col-sm-6">
          <a href="">
           <div class="hienthi">
             <img src="{{$data[6*$j+$i]->link_image}}" height="100%" width="100%">
           </div>
         </a>
         <p align="center">
           <a href="">{{$data[6*$j+$i]->ten_truyen}}</a><br></p>
         </div>
         @endfor
       </div>
       @endfor
     </div>

   </div>
 </div>

</div>
</div>

@stop
