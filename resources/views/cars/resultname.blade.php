@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Kết quả tìm kiếm</h2>
          <div class="clr"></div>
          @foreach ($dsxe as $xe)
          <div class="sp">
            <p><img src="{{$xe->im_url}}" width="198" height="188" alt="" class="fl" /></p>
            <p><a href="/car/{{ $xe->car_id }}">"{{ $xe->car_name }}"<a></p>
          </div>
          @endforeach
          <div class="clr"></div>
          <?php 
            use Illuminate\Support\Facades\Input;
            echo $dsxe->appends(array('tenxe' => Input::get('tenxe')))->links(); 
          ?>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
  </div>
@stop
