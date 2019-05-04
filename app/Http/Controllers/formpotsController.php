<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\E_log_Pots;
use Alert;

class formpotsController extends Controller
{
    public function index()
    {
      $E_pots = E_log_Pots::all();
      return view ('content.pots.index', compact('$E_pots'));
    }

    public function create()
    {
      return view('content.pots.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
         'tgl_log'  => 'required',
         'uraian_lap' => 'required',
         'jabatan' => 'required',
         'lampiran' => 'required',
         'ket' => 'required'
       ]);
       Bandara::create($request->all());
       Alert::success('Data berhasil disimpan!');
       return redirect('formpots');
    }
}
