@extends('layouts.master')
@section('content')
  <div class="content_resize">
    <div class="mainbar">
      <div class="article">
        <h2>SỬA SẢN PHẨM</h2> 
        {{ Form::open(array('url' => 'admin/show/edit/check1', 'method' => 'post','files' => true)) }}
        <p>
          <input  type = "hidden" name="id" value = "{{$dsxe[0]->car_id}}"  />
        </p>
        <p>
          {{ Form::label('tenxe','Tên Xe')  }}
          {{ Form::text('tenxe',$dsxe[0]->car_name) }}<br/>
          <?php echo $errors->first('tenxe')  ?>
        </p>
        <p>
          {{ Form::label('anh','Chọn hình ảnh')  }}
          {{form::file('anh') }}<br/>
          <?php echo $errors->first('anh')  ?>
        </p>
        <p>
          {{ Form::label('mauxe','Màu xe') }}  
          {{ form::text('mauxe',$dsxe[0]->car_color) }}<br/>
          <?php echo $errors->first('mauxe')  ?>
        </p>
        <p>
          {{ Form::label('loaixe','Loại xe') }}  
          {{ form::text('loaixe',$dsxe[0]->car_loai) }}<br/>
          <?php echo $errors->first('loaixe')  ?>
        </p>
        <p>    
          <?php $hangs = DB::table('hang_xe')->get()  ?>    
          {{ Form::label('mahang','Mã hãng') }}
          <select name="mahang">
            @foreach ($hangs as $hang)
            <option>{{$hang->hang_id}}</option>
            @endforeach
          </select>
          <?php echo $errors->first('mahang')  ?>
        </p>
        <p>       
          {{ Form::label('giaxe','Giá xe') }}
          {{ Form::text('giaxe',$dsxe[0]->car_gia) }}<br/>
          <?php echo $errors->first('giaxe')  ?>
        </p>
        <p>
          {{ Form::label('noidung','Nội dung') }}  
          {{ form::textarea('noidung',$dsxe[0]->car_content) }}<br/>
        </p>    
          {{ Form::submit('POST') }}                                          
    </div>
   </div>
    @include('includes/sidebaruser')
  </div>
@stop
 