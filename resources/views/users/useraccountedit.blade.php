@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Thông Tin User</h2>
          <div class="clr"></div>
          {{ Form::open(array('url' => '/show/edit/account1', 'method' => 'post','files' => true)) }}
            <?php $image = DB::table('image')->where('image.im_ma','=',$dsuser[0]->user_image)->get();?>
          @if($image != null)
            <div class="img"><img src="{{$image[0]->im_url}}" width="198" height="188" alt="" class="fl" /></div>
          @else
            <div class="img"><img src="/images/userpic.gif" width="198" height="188" alt="" class="fl" /></div>
          @endif

          <div class="post_content"> <!--Text trong content-->         
          <input  type = "hidden" name="id" value = "{{$dsuser[0]->id}}" /> 
          <p>
            {{ Form::label('anh','Chọn hình ảnh') }}
            {{form::file('anh') }}<br/>
          </p>
          <p>
            {{ Form::label('sdt','Số điện thoại') }}
            {{ Form::text('sdt', $dsuser[0]->user_sdt) }}<br/>
          <?php echo $errors->first('sdt'); ?>
          </p>
          <p>
            {{ Form::label('email','Email') }}
            {{ Form::text('email', $dsuser[0]->user_email) }}<br/>
            <?php echo $errors->first('email'); ?>
          </p>
          <p>
            {{ Form::label('diachi','Địa chỉ') }}
            {{ Form::text('diachi', $dsuser[0]->user_diachi ) }}<br/>
          </p>
          <p>
            {{ Form::label('diachi','Giới thiệu') }}
            {{ Form::textArea('content', $dsuser[0]->user_gioithieu ) }}<br/>
          </p>
            {{ Form::submit('EDIT') }}
            {{ Form::close() }}
          </div>
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebaruser')
    </div>
  </div>
   @stop
