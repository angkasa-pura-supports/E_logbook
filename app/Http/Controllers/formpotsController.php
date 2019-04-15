<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formpotsController extends Controller
{
    public function index()
    {
      return view ('formpots');
    }
}
