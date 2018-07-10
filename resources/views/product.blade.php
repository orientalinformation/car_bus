
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
            <p><img src="{{ $car->image}}" width="198" height="188" alt="" class="fl" /></p>
            <p><a href="/car/{{ $car->id }}">"{{ $car->name }}"<a></p>
          </div>
          @endforeach
          <div class="clr"></div>
        </div>
        @include('includes/sidebarright')
        <div class="clr"></div>
      </div>
    </div>
  </div>
@stop
