@extends('layouts.master')
@section('content')
  <div class="content_resize">
    <div class="mainbar">
      <div class="article">
        <h2>Thay đổi password</h2>         
        {{ Form::open(array('url' => 'users/show/account/change', 'method' => 'post')) }}
        <p>
          {{ Form::label('mkcu','Nhập mật khẩu cũ') }}
          {{ Form::password('mkcu') }}<br/>
          <?php echo $errors->first('mkcu'); ?>
          {{ Session::get('message') }}
        </p>
        <p>
          {{ Form::label('mkmoi','Nhập mật khẩu mới') }}
          {{ Form::password('mkmoi') }}<br/>
          <?php echo $errors->first('mkmoi'); ?>
        </p>
        <p>
          {{ Form::label('nlmk','Nhập lại mật khẩu') }}
          {{form::password('nlmk') }}<br/>
          <?php echo $errors->first('nlmk') ?>
        </p>
          {{ Form::submit('EDIT') }}
          {{ Form::close() }}                                     
      </div>
    </div>
    @include('includes/sidebaruser')
  </div>
@stop
 