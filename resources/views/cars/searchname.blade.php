@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Tìm Kiếm Theo Tên</h2>
          <div class="clr"></div>
            {{ Form::open(array('url' => 'resultname', 'files' => true)) }}
            {{ Form::label('tenxe', 'Tên xe (requirred):') }}
            {{ Form::text('tenxe') }}
            <br/>
            {{ Form::submit('Tìm Kiếm') }}
            {{ Form:: close()}}
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
  </div>
@stop
