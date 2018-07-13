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
          <?php $image = DB::table('image')->where('image.im_ma', '=', Auth::user()->user_image)->get(); ?>
          @if($image != null)
            <div class="img"><img src="{{$image[0]->im_url}}" width="198" height="188" alt="" class="fl" /></div>
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
        <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Chức năng Tài khoản</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
	          <li><a href="/users/show/account"><span>Xem Thông Tin Cá Nhân</span></a></li>
	          <li><a href="/user/show/account/edit"><span>Sửa Thông Tin Cá Nhân</span></a> </li>
	          <li><a href="/user/show/account/matkhauedit"><span>Thay đổi mật khẩu</span></a> </li> 
	          
	          @if(Auth::user()->user_role == 'ADM')
  	          <li><a href="/admin/show/add"><span>Thêm Sản Phẩm</span></a></li>
  			      <li><a href="/admin/show/delete"><span>Xóa Sản Phẩm</span></a></li>
  	          <li><a href="/admin/show/edit"><span>Sửa Sản phẩm</span></a></li>
  	          <li><a href="/admin/show/user/edit"><span>Quản lí tài khoản người dùng</span></a></li>  
	          @endif
          </ul>
        </div>
        
      </div>
    </div>
  </div>
    @stop
