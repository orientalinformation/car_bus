
@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Liên Hệ</span></h2>
          <div class="clr"></div>
          <p>Xin hãy hoàn thành mẫu form phía dưới.</p>
        </div>
        <div class="article">
          <h2>Nội dung</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="lienhe">
            <ol>
              <li>
                <label for="tenlh">Tên (required):</label>
                <input id="tenlh" name="tenlh" type="text" />
              </li>
              <li>
                <label for="emaillh">Email:</label>
                <input id="emaillh" name="emaillh" type="text" />
              </li>
              <li>
                <label for="sdtlh">Số điện thoai:</label>
                <input id="sdtlh" name="sdtlh" class="type" />
              </li>
              <li>
                <label for="messagelh">Your Message:</label>
                <textarea id="messagelh" name="messagelh" rows="8" cols="50"></textarea>
              </li>
              <li>
				<br/>
                <input type="button" name="button" value="Gửi"  />
              </li>
            </ol>
          </form>
        </div>
      </div>
      @include('includes/sidebarright')
      <div class="clr"></div>
    </div>
  </div>
  @stop

