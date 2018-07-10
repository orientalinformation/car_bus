<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function login()
	{
		return View::make('users.login');
	}

	public function loginAttempt()
	{
		$input = $this->request->all();
		var_dump($input); die;
		$username = $input['tentaikhoan'];
		$password = $input['matkhau'];

		$credentials = $this->request->only($username, $password);

    // if (Auth::attempt($credentials)) {
        // return redirect()->intended('users/show/account');
    // }

		if (Auth::attempt($credentials)) {
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

	public function account()
	{
		return View::make('users.account');
	}
}