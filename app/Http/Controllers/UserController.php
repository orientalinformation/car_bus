<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class UserController extends Controller
{

  protected $request;

  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function index()
  {
    
  }

  public function storeRegister()
  {
    $input = $this->request->all();

    $rules = array(
      'taikhoandk' => 'required|unique:users,user_name',
      'matkhaudk' => 'required|min:6',
      'rematkhaudk' => 'required|same:matkhaudk',
      'emaildk' => 'required|unique:users,user_email',
      'sdtdk' => 'required|digitsbetween:10,11',
    );

    $messages = array(
      'taikhoandk.required'  => '<b style="color:red">Tên tài khoản không được để trống</b>',
      'taikhoandk.unique'  => '<b style="color:red">Tên tài khoản đã tồn tại</b>',
      'matkhaudk.required' => '<b style="color:red">Mật khẩu không được để trống</b>',
      'matkhaudk.min' => '<b style="color:red">Mật khẩu không đủ số ký tự</b>',
      'rematkhaudk.required' => '<b style="color:red">Mật khẩu không được để trống</b>',
      'rematkhaudk.same' => '<b style="color:red">Mật khẩu nhập lại không đúng</b>',
      'emaildk.required' => '<b style="color:red">Email không được để trống</b>',
      'emaildk.email' => '<b style="color:red">Email không hợp lệ</b>',
      'emaildk.unique' => '<b style="color:red">Email đã tồn tại</b>',
      'sdtdk.required' => '<b style="color:red">Số điện thoại không được để trống</b>',
      'sdtdk.digitsbetween' => '<b style="color:red">Số điện thoại không hợp lệ</b>',
    );

    $validator = Validator::make(Input::all(), $rules,$messages);
    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('users/register')->withErrors($validator);
    } else {
        $username = Input::get('taikhoandk');
        $password = Hash::make(Input::get('matkhaudk'));
        $email = Input::get('emaildk');
        $sdt = Input::get('sdtdk');
        $ntns = Input::get('ntnsdk');
        $diachi = Input::get('dcdk');
        $gioithieu = Input::get('messagedk');
        DB::table('users')->insert(
        array('user_name' => $username , 'password' => $password, 'user_email' => $email,'user_sdt' => $sdt,'user_gioithieu' => $gioithieu,'user_ntns' => $ntns,'user_diachi' => $diachi,'user_role' => 'MEM'));
        return Redirect::to('users/login')->with('message', 'Đăng kí thành công');
    }
  }

  public function login()
  {
    return View::make('users.login');
  }

  public function loginAttempt()
  {
    $input = $this->request->all();
    
    $username = $input['tentaikhoan'];
    $password = $input['matkhau'];

    if (Auth::attempt(array('user_name' => $username, 'password' => $password))) {
      $role = Auth::user()->user_role;
      if($role == 'ADM') {
        return Redirect::intended('admin/user/show/account')
        ->with('message', 'Đăng nhập thành công.');
      } else {
        return Redirect::intended('users/show/account')
        ->with('message', 'Đăng nhập thành công.');
      }
    } else {
      return Redirect::intended('users/login')
      ->with('messages', 'Username và password không tồn tại.');
    }
  }

  public function logout()
  {
    Auth::logout();
    return Redirect::intended('/');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
  }

  public function show()
  {
    
    return View::make('users.show');
  }

  public function add()
  {
    return View::make('users.add');
  }

  public function account()
  {
    return View::make('users.account');
  }

  public function accountedit()
  {
    return View::make('users.accountedit');
  }

  public function accountupdate()
  {
    $rules = array(
        'email' => 'required:users,user_email',
        'sdt' => 'required|digitsbetween:10,11',
    );

    $messages = array(
        'email.required' => '<b style="color:red">Email không được để trống</b>',
        'email.email'  => '<b style="color:red">Email không hợp lệ</b>',
        'sdt.required'  => '<b style="color:red">Số điện thoại không được để trống</b>',
        'sdt.digitsbetween' => '<b style="color:red">Số điện thoại không hợp lệ</b>',
    );

    $validator = Validator::make(Input::all(), $rules,$messages);
    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('/users/show/account/edit')->withErrors($messages);
    } else {
      $anh = Input::file('anh');
      $sdt = Input::get('sdt');
      $email = Input::get('email');
      $diachi = Input::get('diachi');
      $content = Input::get('content');
      $destinationPath ='images';
      
      if($anh !="" ){
        $filename = $anh->getClientOriginalName();
        $uploadSuccess = Input::file('anh')->move($destinationPath, $filename);
        if($uploadSuccess) {
          DB::table('image')->insert(array('image.im_url' => '/images/'.$filename));
          $image = DB::table('image')->max('im_ma');

          DB::table('users')->where('users.id','=', Auth::user()->id)->update(
          array('users.user_image' => $image,
                'users.user_sdt' => $sdt,
                'users.user_email' => $email,
                'users.user_diachi' => $diachi,
                'users.user_gioithieu' => $content)
          );
          return Redirect::to('/users/show/account');
        }
      } else {
        $image = Auth::user()->user_image;
        DB::table('users')->where('users.id','=', Auth::user()->id)->update(
        array('users.user_image' => $image,
              'users.user_sdt' => $sdt,
              'users.user_email' => $email,
              'users.user_diachi' => $diachi,
              'users.user_gioithieu' => $content)
        );
        return Redirect::to('/users/show/account');
      }
    }
  }

  public function passwordedit()
  {
    return View::make('users.passwordedit');
  }

  public function changePassword()
  {
    $mkcu = Input::get('mkcu');
    $mkmoi = Input::get('mkmoi');
    $nlmk= Input::get('nlmk');

    $rules = array(
        'mkcu'=>'required',
        'mkmoi'=>'required',
        'nlmk'=>'required|same:mkmoi',
    );

    $messages = array(
        'mkcu.required'    => '<b style="color:red">Mật khẩu không được để trống</b>',
        'mkmoi.required'    => '<b style="color:red">Mật khẩu không được để trống</b>',     
        'nlmk.required'    => '<b style="color:red">Mật khẩu không được để trống</b>',
        'nlmk.same'    => '<b style="color:red">Mật khẩu nhập lại không đúng</b>',  
    );
    
    $validator = Validator::make(Input::all(), $rules,$messages);
    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('users/show/account/passworddit')->withErrors($messages);
    } else {
      $hashedPassword = DB::table('users')->where('users.id','=', Auth::user()->id)->get();
      if (Hash::check($mkcu, $hashedPassword[0]->password)) {
        $mkmoi = Hash::make(Input::get('mkmoi'));
        DB::table('users')->where('users.id','=', Auth::user()->id)->update(
        array('users.password' => $mkmoi));
        return Redirect::to('/users/show/account')->with('message','<b style="color:green">Bạn đã thay đổi thành công</b>');
      } else {
        return Redirect::to('/users/show/account/passworddit')->with('message',"<b style='color:red'>Mật khẩu cũ không đúng</b>");
      }
    }
  }

  public function checkAdd()
  {
    $rules = array(
        'tenxe' => 'required',
        'anh' => 'required',
        'mauxe' => 'required',
        'loaixe' => 'required',
        'mahang' => 'required',
        'giaxe' => 'required',
    );

    $messages = array(
        'tenxe.required' => '<b style="color:red">Tên xe không được để trống</b>',
        'anh.required' => '<b style="color:red">Hính ảnh không được để trống</b>',
        'mauxe.required' => '<b style="color:red">Màu xe không được để trống</b>',
        'loaixe.required' => '<b style="color:red">Loại xe không được để trống</b>',
        'mahang.required' => '<b style="color:red">Mã hãng không được để trống</b>',
        'giaxe.required' => '<b style="color:red">Giá xe không được để trống</b>',
    );

    $validator = Validator::make(Input::all(), $rules, $messages);
    if ($validator->fails()) {
      $messages = $validator->messages();
      return Redirect::to('admin/show/add')->withErrors($messages);
    } else {
      $tenxe = Input::get('tenxe');
      $anh = Input::file('anh');
      $mauxe = Input::get('mauxe');
      $loaixe = Input::get('loaixe');
      $mahang = Input::get('mahang');
      $giaxe = Input::get('giaxe');
      $noidung = Input::get('noidung');
      
      $destinationPath ='images';
      
      if($anh != "") {
        $filename = $anh->getClientOriginalName();
        $uploadSuccess = Input::file('anh')->move($destinationPath, $filename);
        if($uploadSuccess) {
          DB::table('image')->insert(array('image.im_url' => '/images/'.$filename));
          $image = DB::table('image')->max('im_ma');
      
          DB::table('car')->insert(
          array( 
            'car.car_name' => $tenxe, 
            'car.car_image' => $image, 
            'car.car_color' => $mauxe,
            'car.car_loai' => $loaixe,
            'car.car_hang' => $mahang,
            'car.car_gia' => $giaxe,
            'car.car_content' => $noidung));
          return Redirect::to('/users/show/account')->with('message','<b style="color:green">Thêm sản phẩm thành công.</b>');
        }
      }
    }         
  }
}