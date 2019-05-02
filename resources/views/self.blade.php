@extends('template')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="card card-body">
            <h4 class="card-title">Self Checkin Kios K</h4>
            <form class="form-horizontal m-t-40">
              <div class="form-group row">
                  <label for="example-date-input" class="col-2 col-form-label">Tgl Log Book</label>
                  <div class="col-3">
                      <input class="form-control" type="date" value="#" id="example-date-input">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-month-input" class="col-2 col-form-label">IP Address Kios K</label>
                  <div class="col-10">
                      <select class="custom-select col-12" id="inlineFormCustomSelect">
                          <option selected="">Pilih...</option>
                          <option value="192.168.44.149">192.168.44.149</option>
                          <option value="192.168.44.143">192.168.44.143</option>
                          <option value="192.168.44.159">192.168.44.159</option>
                          <option value="192.168.44.163">192.168.44.163</option>
                          <option value="192.168.44.157">192.168.44.157</option>
                          <option value="192.168.44.155">192.168.44.155</option>
                          <option value="192.168.44.161">192.168.44.161</option>
                          <option value="192.168.44.141">192.168.44.141</option>
                          <option value="192.168.44.145">192.168.44.145</option>
                          <option value="192.168.44.147">192.168.44.147</option>
                          <option value="192.168.44.151">192.168.44.151</option>
                          <option value="192.168.44.153">192.168.44.155</option>
                      </select>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-month-input" class="col-2 col-form-label">Jenis Kerusakan</label>
                  <div class="col-10">
                      <select class="custom-select col-12" id="inlineFormCustomSelect">
                          <option selected="">Pilih...</option>
                          <option value="replace">Replace Thermal Paper</option>
                          <option value="paper">Paper Jam</option>
                          <option value="network">Network Error</option>
                          <option value="overheat">Overheat</option>
                          <option value="application">Application Not Responding</option>
                          <option value="scanner">Scanner Passport</option>
                          <option value="others">Others</option>
                      </select>
                  </div>
              </div>
                <div class="form-group">
                    <label>Uraian Laporan</label>
                    <textarea class="form-control" rows="5"></textarea>
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
@endsection
