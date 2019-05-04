@extends('front.layouts.front')

@section('content')
  <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row page-titles">
          <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Data Karyawan</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item active">Input Data Karyawan</li>
              </ol>
              <a href="{{ route('formpots.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Karyawan</h4>
                <div class="table-responsive m-t-40">
                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jabatan</th>
                        <th>Uraiaan Laporan</th>
                        <th>Teknisi</th>
                        <th>Ket</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jabatan</th>
                        <th>Uraiaan Laporan</th>
                        <th>Teknisi</th>
                        <th>Ket</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>SHIAM</td>
                        <td>Toilet 1C</td>
                        <td>Achmadi</td>
                        <td>Akbar</td>
                        <td>2011/04/25</td>
                        <td>
                          <button type="button" class="btn btn-info"><i class="fa fa-search-plus"></i></button>
                          <button type="button" class="btn btn-warning"><i class="ti-pencil"></i></button>
                          <button type="button" class="btn btn-danger"><i class="ti-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>SHIAM</td>
                        <td>Toilet 1C</td>
                        <td>Achmadi</td>
                        <td>Akbar</td>
                        <td>2011/04/25</td>
                        <td>
                          <button type="button" class="btn btn-info"><i class="fa fa-search-plus"></i></button>
                          <button type="button" class="btn btn-warning"><i class="ti-pencil"></i></button>
                          <button type="button" class="btn btn-danger"><i class="ti-trash"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
