<div class="header">
  <div class="header_resize">
    <div class="searchform"> <!--Thanh Tìm Kiếm-->
      <form id="formsearch" name="formsearch" method="get" action="/ketquaten"> 
        <span>
        <input name="tenxe" class="editbox_search" id="editbox_search" maxlength="80" value="Nhập vào tên hoặc hãng xe." type="text">
        </span>
        <input src="/images/search.gif" class="button_search" type="image" >
      </form>
      <div class="clr"></div>
      <div style="background:white">
        @if(Auth::check())
          <div >Xin chào: 
            <a href="/user/show/account">{{ Auth::user()->user_name }}</a><br/>
            <a href="/user/logout">Đăng Xuất</a>
          </div>
        @else 
            Chưa đăng nhập | <a href="/users/login">Đăng nhập</a>
        @endif
      </div>
    </div>
    <div class="logo"> <!--Chữ header-->
      <h1><a href="../">Đại Học Khoa Học Tự Nhiên<small>Khoa Công Nghệ Thông Tin</small></a></h1>
    </div>
    <div class="clr"></div>
    <div class="menu_nav"> <!--Phần Navigation-->
      <ul class="nav_bar">
        <li><a href="/"><span>Trang Chủ</span></a></li>
        <li><a href="/introduce"><span>Giới Thiệu</span></a></li>
        <li class="nav_sub"><a href="/users/login"><span>Tài Khoản</span></a>
          <ul>
            <li><a href="/users/register"><span>Đăng Ký</span></a></li>
            <li><a href="/users/login"><span>Đăng nhâp</span></a></li>
            <li></li>
          </ul>
        </li>
        <li class="nav_sub"><a href="/product"><span>Hãng Xe</span></a>
          @include('partials/brandmenu', array('menus' => DB::table('hang_xe')->get()))
        </li>
        <li><a href="/contact"><span>Liên Hệ</span></a></li>
        <li><a href="/cars/searchadvanced"><span>Tìm Kiếm Nâng Cao</span></a></li>
      </ul>
    </div>
    <div class="clr"></div>
    <div class="slider"> <!--Phần hình ảnh và chữ slide-->
      @include('partials/slideshow', array('slides' => DB::table('slide_show')->join('image','slide_show.image_url','=','image.im_ma')->get()))
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>