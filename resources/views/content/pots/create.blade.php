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
                    <h4 class="card-title">POTS</h4>
                    <h6 class="card-subtitle"> Passengers On Ticket System </h6>
                    {!! Form::open(['route'=>'formpots.store']) !!}
                    <div class="form-group row">
                        {!! Form::label('Tanggal', 'Tanggal', ['class'=>'control-label']) !!}
                        <div class="col-3">
                            {!! Form::date('tgl_log', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                            @if ($errors->has('tgl_log'))
                            <small class="form-control-feedback">
                                {{ $errors->first('tgl_log') }}
                            </small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('Uraian Laporan', 'Uraian Laporan', ['class'=>'control-label']) !!}
                        {!! Form::textarea('uraian_lap', null, ['class'=>'form-control','rows'=>'5', 'placeholder'=>'Masukkan sesuatu...']) !!}
                        @if ($errors->has('uraian_lap'))
                        <small class="form-control-feedback">
                            {{ $errors->first('uraian_lap') }}
                        </small>
                        @endif
                    </div>
                    <div class="form-group row">
                        {!! Form::label('Jabatan', 'Jabatan', ['class'=>'control-label']) !!}
                        <div class="col-10">
                            {!! Form::select('jabatan',array('Team Leader' =>'Team Leader', 'Teknisi'=>'Teknisi', 'Operator'=>'Operator','Admin'=>'Admin', 'Petugas_rekon'=>'Petugas_rekonsiliasi' ), null, ['class'=>'select2 form-control
                            custom-select', 'placeholder'=>'Masukkan sesuatu...']);!!}
                            @if ($errors->has('jabatan'))
                            <small class="form-control-feedback">
                                {{ $errors->first('jabatan') }}
                            </small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('Lampiran Foto', 'Lampiran Foto', ['class'=>'control-label']) !!}
                        {!! Form::file('upload1', ['class'=>'form-control']) !!}

                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        {!! Form::textarea('ket', null, ['class'=>'form-control', 'placeholder'=>'Masukkan sesuatu...']) !!}
                        @if ($errors->has('Keterangan'))
                        <small class="form-control-feedback">
                            {{ $errors->first('Keterangan') }}
                        </small>
                        @endif
                        <br><br>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float:right;">Clear</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float:right;">Simpan</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
