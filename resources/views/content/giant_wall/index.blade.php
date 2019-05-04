@extends('front.layouts.front')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">E_LoggBook Giant Wall</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">E_LoggBook</a></li>
            <li class="breadcrumb-item active">Giant Wall</li>
          </ol>
          {{-- @can('Create Bandara') --}}
            <a href="{{ route('formgw.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>Create New</a>
          {{-- @endcan --}}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive m-t-40">
              <table id="example23" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Laporan</th>
                    <th>Uriaan Laporan</th>
                    <th>Jabatan</th>
                    <th>Ket</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Laporan</th>
                      <th>Uriaan Laporan</th>
                      <th>Jabatan</th>
                      <th>Ket</th>
                      <th>Action</th>
                    </tr>
                  </tr>
                </tfoot>
                <tbody>
                  <td>1</td>
                  <td>04-05-2019</td>
                  <td>Laporan</td>
                  <td>Teknisi</td>
                  <td>okok</td>
                  <td>
                    <a href="#" class="btn btn-success"> Edit</a>
                    <a href="#" class="btn btn-success"> Delete</a>
                  </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
