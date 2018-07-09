@extends('layouts.master')
@section('content')
<div class="content">
  <div class="content_resize">
    <div class="mainbar">
      <div class="article">
	<h2>Đăng Nhập</h2>
	  <p><b style="color:green"><?php echo Session::get('message');?></b></p>
	  <p><b style="color:red"><?php echo Session::get('messages');?></b></p>
        <div class="clr"></div>
		<form action="/user/login/attempt" method="post" id="dangnhap">
			<p>Tên tài khoản:<input name="tentaikhoan" class="tentaikhoan"type="text" /></p>
			<p>Mật khẩu:<input name="matkhau" class="matkhau" type="password"/></p>
			<p><input class="bt" type="submit" value="Đăng Nhập"/>Nếu bạn chưa có tài khoản vui lòng click <a href="/user/register">vào đây</a> để đăng kí</p>
			<p><a href="#">Quên mật khẩu ?<a></p>
		</form>
      </div>
    </div>
    @include('includes/sidebarright')
  <div class="clr"></div>
  </div>
</div>
@stop
