@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
        <p><b style="color:green"><?php echo Session::get('message');?></b></p>
        <h2>Thông Tin Cá Nhân</h2>
        <div class="menu_nav" > <!--Phần Navigation-->
        </div>
        </div>
      </div>
      @include('includes/sidebaruser')
    </div>
  </div>
 
    @stop
