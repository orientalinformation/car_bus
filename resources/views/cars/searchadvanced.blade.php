@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Tìm Kiếm Nâng Cao</h2>
          <div class="clr"></div>
		        <ol>
              <li>
                {{ Form::open(array('url' => 'resultsearchadvanced','method' => 'get')) }}
                {{ Form::label('tenxe', 'Tên xe :') }}
                {{ Form::text('tenxe') }}
              </li>
              <br/>
              <li>
                {{ Form::label('hangxe', 'Hãng xe :') }}
                {{ Form::text('hangxe') }}
              </li>
              <br/>
              <li>
                  {{ Form::label('loai', 'Loại xe :') }}
                  {{ Form::text('loai') }}
              </li>
              <br/>
              <li>
                {{ Form::label('gia', 'Giá cả :') }}
                Từ 
                {{ Form::text('giacamin')}} đến {{ Form::text('giacamax')}}
              </li>
              <br/>
                {{ Form::submit('Tìm Kiếm') }}
                {{ Form:: close()}}
            </ol>
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
  </div>
@stop
