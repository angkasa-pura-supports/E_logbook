@extends('template')

@section('content')
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h4 class="text-themecolor">Sewa</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
              <div class="d-flex justify-content-end align-items-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                      <li class="breadcrumb-item active">Data Project Sewa</li>
                  </ol>
                  <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle"></i> New Project </button>
              </div>
          </div>
      </div>
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Data Project Sewa</h4>
                  <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                  <div class="table-responsive m-t-40">
                      <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>Nama Project</th>
                                  <th>No. Kontrak</th>
                                  <th>Tgl.Kontrak</th>
                                  <th>Jangka Waktu</th>
                                  <th>Nilai Kontrak</th>
                                  <th>Keterangan</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>Nama Project</th>
                                  <th>No. Kontrak</th>
                                  <th>Tgl. Kontrak</th>
                                  <th>Jangka Waktu</th>
                                  <th>Nilai Kontrak</th>
                                  <th>Keterangan</th>
                              </tr>
                          </tfoot>
                          <tbody>
                              <tr>
                                  <td>Tiger Nixon</td>
                                  <td>System Architect</td>
                                  <td>Edinburgh</td>
                                  <td>61</td>
                                  <td>2011/04/25</td>
                                  <td><a href="#">View</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
                              </tr>
                              <tr>
                                  <td>Garrett Winters</td>
                                  <td>Accountant</td>
                                  <td>Tokyo</td>
                                  <td>63</td>
                                  <td>2011/07/25</td>
                                  <td><a href="#">View</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">New Project</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label"> Nama Project:</label>
                                <input type="text" class="form-control" id="nama-project">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"> No Kontrak:</label>
                                <input type="text" class="form-control" id="no-kontrak">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"> Tgl Kontrak:</label>

                                    <input class="form-control" type="date" value="#" id="tgl-kontrak">

                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"> Jangka Waktu:</label>
                                <input type="text" class="form-control" id="jangka-waktu">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"> Nilai Kontrak:</label>
                                <input type="text" class="form-control" id="nilai">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"> Keterangan:</label>
                                <input type="text" class="form-control" id="ket">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->

@endsection
