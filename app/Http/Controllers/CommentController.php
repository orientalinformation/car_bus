<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

class CommentController extends Controller
{
  public function getIndex()
  {
    $rules = array(
        'tencm'=>'required:user',
    );

    $messages = array(
        'tencm.required'    => '<b style="color:red">Tên tài khoản không được để trống</b>',           
    );

    $validator = Validator::make(Input::all(), $rules, $messages);
    if ($validator->fails()) {
      $id_car = Input::get('id');
      $messages = $validator->messages();
      return Redirect::to('/car/'.$id_car)->withErrors($messages);
    } else {
      $name = Input::get('tencm');
      $message = Input::get('messagecm');
      $id_car = Input::get('id');
      $time = Input::get('ngaythang');

      DB::table('comment')->insert(array('cm_content' => $message,'cm_date' => $time, 'cm_name' => $name,'cm_car_id' => $id_car));
      return Redirect::to('/car/'.$id_car);
    }
  }
}