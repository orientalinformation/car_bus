@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Sản phẩm hiện có</h2>
          <div class="clr"></div>
          @foreach ($dsxe as $xe)
            <div class="sp">
            <p><img src="{{$xe->im_url}}" width="198" height="188" alt="" class="fl" /></p>
            <p>ID = {{$xe->car_id}}</p>
            </div>
          @endforeach         
          <div class="clr"></div>
          {{ Form::open(array('url' => 'admin/show/edit/check', 'method' => 'get')) }}
          {{ Form::label('id','Chọn ID muốn sửa:') }}
          {{ Form::text('id') }}<br/>
          {{ Form::submit('EDIT')}}
          {{ Form::close() }}
        </div>
      </div>
      @include('includes/sidebaruser')
      <div class="clr"></div>
    </div>
  </div>
@stop

