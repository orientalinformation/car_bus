@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            <h2>Thông Tin Cá Nhân</h2>
            <div class="clr"></div>
            {{ Form::open(array('url' => 'show/edit/account', 'method' => 'post','files' => true)) }}
            <?php $image = DB::table('image')->where('image.im_ma','=', Auth::user()->user_image)->first();?>
            @if($image != null)
            <div class="img"><img src="{{$image->im_url}}" width="198" height="188" alt="" class="fl" /></div>
            @else
            <div class="img"><img src="/images/userpic.gif" width="198" height="188" alt="" class="fl" /></div>
            @endif
            
            <div class="post_content"> <!--Text trong content-->         
              <p>
                {{ Form::label('anh','Chọn hình ảnh') }}
                {{ Form::file('anh') }}<br/>
              </p>
              <p>
                {{ Form::label('sdt','Số điện thoại') }}
                {{ Form::text('sdt', Auth::user()->user_sdt ) }}<br/>
                <?php echo $errors->first('sdt'); ?>
              </p>
              <p>
                {{ Form::label('email','Email') }}
                {{ Form::text('email', Auth::user()->user_email ) }}<br/>
                <?php echo $errors->first('email'); ?>
              </p>
              <p>
                {{ Form::label('diachi','Địa chỉ') }}
                {{ Form::text('diachi', Auth::user()->user_diachi ) }}<br/>
              </p>
              <p>
                {{ Form::label('diachi','Giới thiệu') }}
                {{ Form::textArea('content', Auth::user()->user_gioithieu ) }}<br/>
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
