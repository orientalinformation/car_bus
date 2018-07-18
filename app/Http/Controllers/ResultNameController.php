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


class ResultNameController extends Controller
{
  public function getIndex()
  {
    $name = Input::get('tenxe');
    $results = DB::table('car')->join('hang_xe','car.car_hang','=','hang_xe.hang_id')->join('image','car.car_image','=','image.im_ma')->where('hang_xe.hang_name','like',$name)->orwhere('car.car_name','like','%'.$name.'%')->select('hang_xe.hang_name', 'image.im_url', 'car.car_id','car.car_name')->paginate(3);
    return View::make('cars.resultname',array('dsxe'=>$results));
  }

  public function result()
  {
    $name = Input::get('tenxe');
    $hang = Input::get('hangxe');
    $loai = Input::get('loai');
    $giamin = Input::get('giacamin');
    $giamax = Input::get('giacamax');
    
    $results = DB::table('car')
    ->join('image','image.im_ma','=','car.car_image')
    ->join('hang_xe','hang_xe.hang_id','=','car.car_hang')->where('car.car_name','like','%'.$name.'%')->where('hang_xe.hang_name','like','%'.$hang.'%')->where('car.car_loai','like','%'.$loai.'%')->whereBetween('car.car_gia', array($giamin, $giamax))->paginate(3);
    return View::make('cars.resultadvanced', array('dsxe' => $results));
  }
}