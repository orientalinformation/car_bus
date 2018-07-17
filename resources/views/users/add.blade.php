@extends('layouts.master')
@section('content')
<div class="content_resize">
  <div class="mainbar">
    <div class="article">
      <h2>THÊM SẢN PHẨM</h2>         
        {{ Form::open(array('url' => 'admin/show/add/check', 'method' => 'post','files' => true)) }}
        <p>
          {{ Form::label('tenxe','Tên Xe') }}
          {{ Form::text('tenxe') }}<br/>
          <?php echo $errors->first('tenxe')  ?>
        </p>
        <p>
          {{ Form::label('anh','Chọn hình ảnh') }}
          {{form::file('anh') }}<br/>
          <?php echo $errors->first('anh')  ?>
        </p>
        <p>
          {{ Form::label('mauxe','Màu xe') }}  
          {{ form::text('mauxe') }}<br/>
          <?php echo $errors->first('mauxe')  ?>
        </p>
        <p>
          {{ Form::label('loaixe','Loại xe') }}  
          {{ form::text('loaixe') }}<br/>
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
          {{ Form::text('giaxe') }}<br/>
          <?php echo $errors->first('giaxe')  ?>
        </p>
        <p>
          {{ Form::label('noidung','Nội dung') }}  
          {{ form::textarea('noidung') }}<br/>
        </p>   
        {{ Form::submit('POST') }}
        {{ Form::close() }}                                    
    </div>
  </div>
  @include('includes/sidebaruser')
</div>
@stop
 