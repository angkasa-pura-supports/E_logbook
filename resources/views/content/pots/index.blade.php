@extends('front.layouts.front')
@section('cssAssets')
  @include('front.partials.css.cssSweetAlert')
@endsection
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">E_LogBook Pots</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">E_LogBook</a></li>
            <li class="breadcrumb-item active">Pots</li>
          </ol>
          {{-- @can('Create Bandara') --}}
            <a href="{{ route('formpots.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
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
                  @php
                      $no=0;
                    @endphp
                    @foreach ($E_log as $value)
                      <tr>
                        <td>{{ $no=$no+1 }}</td>
                        <td>{{ $value->tgl_log }}</td>
                        <td>{{ $value->uraian_lap }}</td>
                        <td>{{ $value->jabatan }}</td>
                        <td>{{ $value->ket }}</td>
                        <td>
                          {!! Form::open(['route'=>['formpots.destroy', $value->id], 'method'=>'DELETE']) !!}
                            <a href="{{ route('formpots.edit', $value->id) }}" class="btn btn-info btn-xs">Ubah</a>
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                          {!! Form::close() !!}
                        </td>
                      </tr>
                    @endforeach
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
@section('jsAssets')
  @include('front.partials.js.jsSweetAlert')
  @include('sweet::alert')
@endsection
