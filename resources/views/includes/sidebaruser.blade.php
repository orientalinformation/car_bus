<div class="sidebar">
  <div class="gadget">
    <h2 class="star">Chức năng Tài khoản</h2>
    <div class="clr"></div>
    <ul class="sb_menu">
      <li><a href="/users/show/account"><span>Xem Thông Tin Cá Nhân</span></a></li>
      <li><a href="/users/show/account/edit"><span>Sửa Thông Tin Cá Nhân</span></a> </li>
      <li><a href="/users/show/account/matkhauedit"><span>Thay đổi mật khẩu</span></a> </li> 
      
      @if(Auth::user()->user_role == 'ADM')
        <li><a href="/admin/show/add"><span>Thêm Sản Phẩm</span></a></li>
        <li><a href="/admin/show/delete"><span>Xóa Sản Phẩm</span></a></li>
        <li><a href="/admin/show/edit"><span>Sửa Sản phẩm</span></a></li>
        <li><a href="/admin/show/user/edit"><span>Quản lí tài khoản người dùng</span></a></li>  
      @endif
    </ul>
  </div>
</div>