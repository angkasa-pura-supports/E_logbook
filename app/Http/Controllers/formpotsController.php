<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\E_log_pots;
use Illuminate\Support\Facades\File;
use Alert;
class formpotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $E_log = E_log_pots::all();
        return view ('content.pots.index', compact('E_log'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('content.pots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'tgl_log' => 'required',
          'uraian_lap' => 'required',
          'jabatan' => 'required',
          'lampiran' => 'required',
          'ket' => 'required'
        ]);

        $data = new E_log_pots;
        $data->tgl_log = $request->tgl_log;
        $data->uraian_lap = $request->uraian_lap;
        $data->jabatan = $request->jabatan;
        if ($request->hasFile('lampiran')) {
          $dir = 'uploads/pots';
          $file = $request->file('lampiran');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $data->lampiran = $newName;
        }
        $data->ket = $request->ket;
        $data->save();
        Alert::success('Data berhasil disimpan!');
        return redirect('formpots');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
