<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function getIndex() {
    return view('index');
  }

  public function getPp() {
    return view('privacy');
  }

  public function getFamily() {
    return view('family');
  }
}
