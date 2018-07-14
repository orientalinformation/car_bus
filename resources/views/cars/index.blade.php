
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
        <p><img src="{{ $xe->image}}" width="198" height="188" alt="" class="fl" /></p>
        <p><a href="/xe/{{ $xe->id }}">"{{ $xe->name }}"<a></p>
        </div>
      @endforeach
      <?php echo $dsxe->links(); ?>
      <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
  </div>
@stop
