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

	public function storeRegister()
	{
		$input = $this->request->all();

		$rules = array(
			'taikhoandk'=>'required|unique:users,user_name',
			'matkhaudk'=>'required|min:6',
			'rematkhaudk'=>'required|same:matkhaudk',
			'emaildk'=>'required|unique:users,user_email',
			'sdtdk'=>'required|digitsbetween:10,11',
		);

		$messages = array(
			'taikhoandk.required'    => '<b style="color:red">Tên tài khoản không được để trống</b>',
			'taikhoandk.unique'    => '<b style="color:red">Tên tài khoản đã tồn tại</b>',
			'matkhaudk.required'    => '<b style="color:red">Mật khẩu không được để trống</b>',
			'matkhaudk.min'    => '<b style="color:red">Mật khẩu không đủ số ký tự</b>',
			'rematkhaudk.required'    => '<b style="color:red">Mật khẩu không được để trống</b>',
			'rematkhaudk.same'    => '<b style="color:red">Mật khẩu nhập lại không đúng</b>',
			'emaildk.required'    => '<b style="color:red">Email không được để trống</b>',
			'emaildk.email'    => '<b style="color:red">Email không hợp lệ</b>',
			'emaildk.unique'    => '<b style="color:red">Email đã tồn tại</b>',
			'sdtdk.required'    => '<b style="color:red">Số điện thoại không được để trống</b>',
			'sdtdk.digitsbetween'    => '<b style="color:red">Số điện thoại không hợp lệ</b>',
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

	public function account()
	{
		return View::make('users.account');
	}
}