@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      <div class="article">
          <h2>Quyền USER</h2>
          <div class="clr"></div>
          <div class="post_content"> <!--Text trong content-->         
            <p> 
             {{ Form::open(array('url' => 'admin/show/edit/auth', 'method' => 'get')) }}
              <input  type = "hidden" name="id" value = "{{$dsuser[0]->id}}"  />  
             {{ Form::label('quyen','Quyền') }}
             <select name="quyen">
              <option>ADM</option>
              <option>MEM</option>
              <option>MOD2</option>
              <option>MOD3</option>
              <option>MOD4</option>
             </select>
            </p>
            {{ Form::submit('EDIT') }}
            {{ Form::close() }}
          </div>
          <div class="clr"></div>
        </div>
      </div>
      @include('includes/sidebaruser')
    </div>
  </div>
@stop
