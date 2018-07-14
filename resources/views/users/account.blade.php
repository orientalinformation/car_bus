@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      <div class="article">
          <h2>Thông Tin Cá Nhân</h2>
        
          <div class="clr"></div>
          <p><b style="color:green"><?php echo Session::get('message');?></b></p>
		      <p><b style="color:red"><?php echo Session::get('messages');?></b></p>
          <?php 
            $image = null;

            if (Auth::user()) {
              $image = DB::table('image')->where('image.im_ma', '=', Auth::user()->user_image)->first(); 
            }
          ?>
          @if($image != null) <!--Error here-->
            <div class="img"><img src="{{$image->im_url}}" width="198" height="188" alt="" class="fl" /></div>
          @else
            <div class="img"><img src="/images/userpic.gif" width="198" height="188" alt="" class="fl" /></div>
          @endif
          <div class="post_content"> <!--Text trong content-->
            
        	<p style="color: red"; size:25px>
        		<?php echo"Tài Khoản:"?><b>{{ Auth::user()->user_name }}</b></br>
        	</p>
        		<?php echo"Tên tài khoản:"?><b>{{ Auth::user()->user_name }}</b><br/>
        		<?php echo"Địa chỉ email:"?><b>{{ Auth::user()->user_email }}</b><br/>
        		<?php echo"Số điện thoại:"?><b>{{ Auth::user()->user_sdt }}</b><br/>
        		<?php echo"Ngày tháng năm sinh:"?><b>{{ Auth::user()->user_ntns }}</b><br/>
        		<?php echo"Địa chỉ:"?><b>{{ Auth::user()->user_diachi }}</b><br/>
	          <?php echo"Giới thiêu:"?><b>{{ Auth::user()->user_gioithieu }}</b><br/>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebaruser')
    </div>
  </div>
    @stop
