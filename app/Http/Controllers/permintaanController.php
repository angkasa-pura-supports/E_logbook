<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class permintaanController extends Controller
{
    public function index()
    {
      return view ('permintaan');
    }
}
