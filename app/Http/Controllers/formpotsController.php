<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class formpotsController extends Controller
{
    public function index()
    {
      return view ('content.pots.index');
    }

    public function create()
    {
      return view('content.pots.create');
    }
}
