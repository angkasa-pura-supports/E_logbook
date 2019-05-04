<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formwifiController extends Controller
{
  public function index()
  {
    return view ('content.wifi.index');
  }

  public function create()
  {
    return view ('content.wifi.create');
  }
}
