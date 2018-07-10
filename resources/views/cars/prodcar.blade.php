@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Sản phẩm hiện có</h2>
          <div class="clr"></div>
          @foreach ($cars as $car)
      		<div class="sp">
  		    	<p><img src="{{ $car->im_url}}" width="198" height="188" alt="" class="fl" /></p>
  		    	<p>Tên xe: <a href="/car/{{ $car->car_id }}">"{{ $car->car_name }}"<a></p>
    				<p>Hãng: {{$car->hang_name}}</p>
    				<p>Loại: {{$car->car_loai}}</p>
    				<p>Màu sắc: {{$car->car_color}}</p>
    				<p>Giá: {{$car->car_gia}}</p>
  		    </div>
  		    @endforeach
  		    <div style="clear: both"></div>
  		    <?php echo $cars->links(); ?>
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
  </div>
@stop
