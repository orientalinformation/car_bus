@extends('layouts.master')
@section('content')
<?php $now = getdate();
  if(!session_id())
    session_start();
  if (isset($_SESSION["count"]))
    
    DB::table('car')->where('car.car_id','=', $xe->car_id)->update(
    array( 'car.view' => $xe->view + 1));
  else
    $_SESSION["count"] = 1;
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>{{ $xe->car_name }}</h2>
          <div class="clr"></div>
          <div class="img"><img src="{{ $xe->im_url }}" width="630" height="500" alt="" class="fl" /></div>
          <div class="chitietsp">
            <h2>Chi tiết sản phẩm</h2>
            {{$xe->car_content }}
            <h2>Màu sắc</h2>
            {{$xe->car_color}}
            <h2>Loại</h2>
            {{$xe->car_loai}}
            <h2>Giá cả</h2>
            {{$xe->car_gia}}
            <h2><?php echo "Số lượt xem: ".$xe->view ?></h2>
          </div>
          <h2>Comment</h2>
          <div class="commentsp">
            <form action="/themcomment" method="get" ">
              <ol>
                <li>
                  @if(Auth::check())
                    <input id="tencm" name="tencm" type = "hidden" value="{{ Auth::user()->user_name }}" />
                    <?php echo $errors->first('tencm'); ?>          
                  @else 
                    <label for="tencm">Tên (required):</label>
                    <input id="tencm" name="tencm" type="text" />
                    <?php echo $errors->first('tencm'); ?>
                  @endif
                </li>
                <li>
                  <label for="messagecm">Your Message:</label>
                  <textarea id="messagecm" name="messagecm" rows="8" cols="50"></textarea>
                </li>
                <input  type = "hidden" name="id" value = "{{$xe->car_id}}"  />
                <input  type = "hidden" name="ngaythang" value = "{{ $now['mday']."/".$now['mon']."/".$now['year']}}"  />
              </ol>
              <button onclick="comment()">  Send</button>
            </form>
            @include('partials/comment', array('comments' => DB::table('comment')->where('comment.cm_car_id','=',$xe->car_id)->orderBy('comment.cm_id','desc')->paginate(3)))
          </div>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
    </div>
@stop
