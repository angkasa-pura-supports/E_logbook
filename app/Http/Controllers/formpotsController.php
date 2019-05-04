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

       $E_pots = new \App\E_log_pots();
        $file = $request->file('lampiran');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $E_pots->file = $newName;
        $E_pots->save();
       E_log_pots::create($request->all());
       Alert::success('Data berhasil disimpan!');
       return redirect('formpots.index');
    }
}
