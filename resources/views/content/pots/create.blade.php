@extends('front.layouts.front')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">E_log POTS</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">E_log</a></li>
                        <li class="breadcrumb-item">E_log POTS</li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">E_log pots</h4>
                    {!! Form::open(['route'=>'formpots.store', 'files'=>true, 'class'=>'form-horizontal m-t-40']) !!}
                      <div class="row form-group{{ $errors->has('tgl_log') ? ' has-danger' : '' }}">
                          {!! Form::label('tgl_log', 'Tgl Log Book', ['class'=>'col-2 col-form-label']) !!}
                          <div class="col-3">
                              {!! Form::date('tgl_log', null, ['class'=>'form-control', 'id'=>'example-date-input']) !!}
                              @if ($errors->has('tgl_log'))
                                <small class="form-control-feedback">
                                  {{ $errors->first('tgl_log') }}
                                </small>
                              @endif
                          </div>
                      </div>

                        <div class="form-group{{ $errors->has('uraian_lap') ? ' has-danger' : '' }}">
                            {!! Form::label('uraian_lap', 'Uraian Laporan', ['class'=>'col-2 col-form-label']) !!}
                            {!! Form::textarea('uraian_lap', null, ['class'=>'form-control', 'rows'=>'5']) !!}
                            @if ($errors->has('uraian_lap'))
                              <small class="form-control-feedback">
                                {{ $errors->first('uraian_lap') }}
                              </small>
                            @endif
                        </div>
                        <div class="row form-group{{ $errors->has('jabatan') ? ' has-danger' : '' }}">
                            {!! Form::label('jabatan', 'Jabatan', ['class'=>'col-2 col-form-label']) !!}
                            <div class="col-10">
                                {!! Form::select('jabatan', [''=>'-- Pilih --', 't1'=>'Team Leader', 'tk'=>'Teknisi', 'op'=>'Operator', 'ad'=>'Admin', 'pr'=>'Petugas Rekonsiliasi'], null, ['class'=>'custom-select col-12']) !!}
                                @if ($errors->has('jabatan'))
                                  <small class="form-control-feedback">
                                    {{ $errors->first('jabatan') }}
                                  </small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lampiran') ? ' has-danger' : '' }}">
                            {!! Form::label('lampiran', 'Lampiran Foto') !!}
                            {!! Form::file('lampiran', ['class'=>'form-control']) !!}
                            @if ($errors->has('lampiran'))
                              <small class="form-control-feedback">
                                {{ $errors->first('lampiran') }}
                              </small>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('ket') ? ' has-danger' : '' }}">
                            {!! Form::label('ket', 'Keterangan') !!}
                            {!! Form::text('ket', null, ['class'=>'form-control']) !!}
                            <br><br>
                            {!! Form::submit('Simpan', ['class'=>'btn btn-success waves-light m-r-10', 'style'=>'float:right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
