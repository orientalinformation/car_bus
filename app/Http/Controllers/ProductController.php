<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use View;

class ProductController extends Controller
{

	public function getIndex()
	{
		$results = DB::table('car')
		->join('image','car.car_image','=','image.im_ma')
		->join('hang_xe','hang_xe.hang_id','=','car.car_hang')->paginate(6);

		return View::make('cars.prodcar', array('cars' => $results));
	}
}