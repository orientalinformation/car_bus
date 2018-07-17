<?php

namespace App\Http\Controllers;

use View;

class SearchAdvancedController extends Controller
{
  public function getIndex()
  {
    return View::make('cars.searchadvanced');
  }
}