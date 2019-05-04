@extends('front.layouts.front')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Giant Wall</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                        <li class="breadcrumb-item">Giant Wall</li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-body">
            <h4 class="card-title">GIANT WALL</h4>
            <form class="form-horizontal m-t-40">
              <div class="form-group row">
                  <label for="example-date-input" class="col-2 col-form-label">Tgl Log Book</label>
                  <div class="col-3">
                      <input class="form-control" type="date" value="#" id="example-date-input">
                  </div>
              </div>

                <div class="form-group">
                    <label>Uraian Laporan</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Jabatan</label>
                    <div class="col-10">
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option selected="">Pilih...</option>
                            <option value="tl">Team Leader</option>
                            <option value="tk">Teknisi</option>
                            <option value="op">Operator</option>
                            <option value="ad">Admin</option>
                            <option value="pr">Petugas Rekonsiliasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Lampiran Foto</label>
                    <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control">
                    <br><br>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float:right;">Clear</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float:right;">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
