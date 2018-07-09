@extends('layouts.master')
@section('content')
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Trang chủ Đồ án cuối kỳ</h2>
          <p class="infopost">Posted <span class="date">on 10 oct 2013</span> by <a href="#">Admin</a></p>
          <div class="clr"></div>
          <div class="img"><img src="images/img1.jpg" width="198" height="188" alt="" class="fl" /></div>
          <div class="post_content"> <!--Text trong content-->            
          <h3>Danh sách thành viên :</h3>
          <ul>
            <li>Trần Phương Đông - 1012025</li>
            <li>Phan Tuấn Hải - 1012036</li>
            <li>Hoàng Minh Hiệp - 1012041</li>
          </ul>
          <h3>Nội dung:</h3>
          <p>Xây dựng hệ thống website bán hàng (Xe hơi) hoàn chỉnh thông qua framework Laravel</p>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
@stop
 