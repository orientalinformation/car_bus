@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Sản phẩm hiện có</h2>
          <p><b style="color:green"><?php echo Session::get('message');?></b></p>
          <div class="clr"></div>
          @foreach ($dsxe as $xe)
            <div class="sp">
            <p><img src="{{$xe->im_url}}" width="198" height="188" alt="" class="fl" /></p>
            <p>ID = {{$xe->car_id}}</p>
            </div>
          @endforeach         
          <div class="clr"></div>
          {{ Form::open(array('url' => 'admin/show/delete/check', 'method' => 'get')) }}
          {{ Form::label('id','Chọn ID muốn xóa:') }}
          {{ Form::text('id') }}<br/>
          {{ Form::submit('DELETE' ) }}
          {{ Form::close() }}
        </div>
      </div>
      @include('includes/sidebaruser')
    </div>
  </div>
@stop
