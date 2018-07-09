@extends('layouts.master')
@section('content')
<?php if(!session_id()) 
	session_start(); ?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Đăng Ký</h2>
          <div class="clr"></div>
			 <form action="/user/register/store" method="post" id="dangki">
				
				<ol>
				  <li>
					<label for="taikhoandk">Tên tài khoản : </label>
					<input id="taikhoandk" name="taikhoandk" type="text" />
					<?php echo $errors->first('taikhoandk'); ?>
				  </li>
				  <li>
					<label for="matkhaudk">Mật khẩu :</label>
					<input id="matkhaudk" name="matkhaudk" type="password" />
					<?php echo $errors->first('matkhaudk'); ?>
				  </li>
				  <li>
					<label for="rematkhaudk">Nhập lại mật khẩu :</label>
					<input id="rematkhaudk" name="rematkhaudk" type="password" />
					<?php echo $errors->first('rematkhaudk'); ?>
				  </li>
				  <li>
					<label for="emaildk">Email:</label>
					<input id="emaildk" name="emaildk" type="text" />
					<?php echo $errors->first('emaildk'); ?>
				  </li>
				  <li>
					<label for="sdtdk">Số điện thoại:</label>
					<input id="sdtdk" name="sdtdk" type="text" />
					<?php echo $errors->first('sdtdk'); ?>
				  </li>
				  <li>
					<label for="ntnsdk">Ngày tháng năm sinh:</label>
					<input id="ntnsdk" name="ntnsdk" type="text" />
				  </li>
				  <li>
					<label for="dcdk">Địa chỉ liên lạc:</label>
					<input id="dcdk" name="dcdk" type="text" />
				  </li>
				  <li>
					<label for="messagedk">Giới thiệu về bản thân:</label>
					<textarea id="messagedk" name="messagedk" rows="8" cols="50"></textarea>
				  </li>			  
				  <li>
					<br/>
<?php 
if (!empty($_COOKIE['captcha'])) 
{
	 $captcha_message = "Invalid captcha"; 
  

    echo "
        <div>
     
        </div> ";
    unset($_COOKIE['captcha']);
}
?>
			<img src="/captcha.php" id="captcha" /><br/>

			<!-- CHANGE TEXT LINK -->
			<a href="#" onclick="
			    document.getElementById('captcha').src='/captcha.php?'+Math.random();
			    document.getElementById('captcha-form').focus();"
			    id="change-image">Not readable? Change text.</a><br/><br/>
			
			
			<input type="text" name="captcha" id="captcha-form" /><br/>		
			<input type="submit" value="Đăng ký"" />
				<div class="clr"></div>
				  </li>
				</ol>
          </form>
          <div class="clr"></div>
		  </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Sidebar Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="../">Trang Chủ</a></li>
            <li><a href="/gioithieu">Giới Thiệu</a></li>
            <li><a href="/user/login">Đăng Nhập</a></li>
            <li><a href="/sanpham">Sản Phẩm</a></li>
            <li><a href="/lienhe">Liên Hệ</a></li>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  @stop