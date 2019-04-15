<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trading;
use Illuminate\Support\Facades\DB;

class forminputController extends Controller
{
  public function index()
  {
      $trading = DB::table('trading')->get();
      return view('forminput', ['trading'=>$trading]);

  }

  public function create()
  {
      $data = trading::all();
      return view('frominput',['data'=>$data]);
  }

  public function store(Request $request)
  {
    DB::table('trading')->insert([
        'nama_project' => $request->nama_project,
        'no_kontrak' => $request->no_kontrak,
        'tgl_kontrak' => $request->tgl_kontrak,
        'jangka_waktu' => $request->jangka_waktu,
        'nilai_total' => $request->nilai_total,
        'ket' => $request->ket
      ]);
      return redirect('/forminput');
  }
}
