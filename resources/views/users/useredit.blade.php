@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
        <h2>User Edit</h2>
        <table border="1" width="100%">
          <caption>Bảng Quản lý user</caption>
          <tr>
          <th>Username</th>
          <th>Sửa</th>
          <th>Xóa</th>
          <th>Quyền</th>
          </tr>
          @foreach($dsuser as $user)
            <tr>
            <td>{{$user->user_name}}</td>
            <td><a href="/user/profile?id={{$user->id}}">Sửa</a></td>
            <td><a href="/user/profiledelete?id={{$user->id}}">Xóa</a></td>
            <td><a href="/user/profileauth?id={{$user->id}}">Quyền</a></td>
            </tr>
          @endforeach
          </table> 
        </div>
      </div>
      @include('includes/sidebaruser')
    <div class="clr"></div>
    </div>
  </div>
@stop
