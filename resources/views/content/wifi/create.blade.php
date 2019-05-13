@extends('front.layouts.front')
@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">E_LogBook Wifi</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">E_LogBook</a></li>
                        <li class="breadcrumb-item">Wifi</li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Check List Wifi 13 Bandara</h4>
                          <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                          <div class="table-responsive">
                              <table id="example23" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                          <tr>
                                              <th rowspan="2"><center style="margin:auto; margin-top: -50px;">No</center></th>
                                              <th rowspan="2"><center style="margin: auto; margin-top: -50px;">Perangkat</center></th>
                                              <th colspan="3"><center style="margin:auto; margin-top: -5px;">Status Shift 1</center></th>
                                              <th colspan="3"><center style="margin:auto; margin-top: -5px;">Status Shift 2</center></th>
                                              <th rowspan="2" colspan="2"><center style="margin:auto; margin-top: -50px;">Keterangan</center></th>
                                          </tr>
                                          <tr>
                                              <th>Down</th>
                                              <th><center>Up</center></th>
                                              <th>Jam</th>
                                              <th>Down</th>
                                              <th>Up</th>
                                              <th>Jam</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Gate 1</td>
                                              <td><input type="text" style="width:50px;"></td>
                                              <td><input type="text" style="width:50px;"></td>
                                              <td><input type="text" style="width:50px;"></td>
                                              <td><input type="text" style="width:50px;"></td>
                                              <td><input type="text" style="width:50px;"></td>
                                              <td><input type="text" style="width:50px;"></td>
                                              <td>Depan Concordia</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Gate 1</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Gloria Jeans</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Gate 1</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate1</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>Gate 1</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Musholla</td>
                                          </tr>
                                          <tr>
                                            <td>5</td>
                                            <td>Gate 2</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Circle K</td>
                                          </tr>
                                          <tr>
                                            <td>6</td>
                                            <td>Gate 2</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate 2</td>
                                          </tr>
                                          <tr>
                                            <td>7</td>
                                            <td>Gate 2</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Dunkin Donuts</td>
                                          </tr>
                                          <tr>
                                            <td>8</td>
                                            <td>Gate 2</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Samping AW</td>
                                          </tr>
                                          <tr>
                                            <td>9</td>
                                            <td>Gate 3</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Bangi Coffee</td>
                                          </tr>
                                          <tr>
                                            <td>10</td>
                                            <td>Gate 3</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate 3</td>
                                          </tr>
                                          <tr>
                                            <td>11</td>
                                            <td>Gate 3</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Siomay</td>
                                          </tr>
                                          <tr>
                                            <td>12</td>
                                            <td>Gate 3</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan CSC Lt.2</td>
                                          </tr>
                                          <tr>
                                            <td>13</td>
                                            <td>Gate 4</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Hall</td>
                                          </tr>
                                          <tr>
                                            <td>14</td>
                                            <td>Gate 4</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Roti O</td>
                                          </tr>
                                          <tr>
                                            <td>15</td>
                                            <td>VIP</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>VIP</td>
                                          </tr>
                                          <tr>
                                            <td>16</td>
                                            <td>Gate 4</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate 4</td>
                                          </tr>
                                          <tr>
                                            <td>17</td>
                                            <td>Gate 4</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan PortShop</td>
                                          </tr>
                                          <tr>
                                            <td>18</td>
                                            <td>Gate 5</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Toraja Food</td>
                                          </tr>
                                          <tr>
                                            <td>19</td>
                                            <td>Gate 5</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Cafe Sakti</td>
                                          </tr>
                                          <tr>
                                            <td>20</td>
                                            <td>Gate 5</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Alfa Mart</td>
                                          </tr>
                                          <tr>
                                            <td>21</td>
                                            <td>Gate 5</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate 5</td>
                                          </tr>
                                          <tr>
                                            <td>22</td>
                                            <td>Gate 6</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Warkop Maros</td>
                                          </tr>
                                          <tr>
                                            <td>23</td>
                                            <td>Gate 6</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate 6</td>
                                          </tr>
                                          <tr>
                                            <td>24</td>
                                            <td>Gate 7 Int A</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Atas Pintu Gate 7</td>
                                          </tr>
                                          <tr>
                                            <td>25</td>
                                            <td>Gate 7 Int B</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Waiting Lounge Gate 7</td>
                                          </tr>
                                          <tr>
                                            <td>26</td>
                                            <td>Baggage Claim</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Antara Belt 1 dan 2</td>
                                          </tr>
                                          <tr>
                                            <td>27</td>
                                            <td>Baggage Claim Int</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Kedatangan Int</td>
                                          </tr>
                                          <tr>
                                            <td>28</td>
                                            <td>Counter Check In A</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Counter Lion</td>
                                          </tr>
                                          <tr>
                                            <td>29</td>
                                            <td>Counter Check In B</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan CS Garuda</td>
                                          </tr>
                                          <tr>
                                            <td>30</td>
                                            <td>Counter Check In C</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Depan Transnusa</td>
                                          </tr>
                                          <tr>
                                            <td>31</td>
                                            <td>Lobby Keberangkatan</td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td><input type="text" style="width:50px;"></td>
                                            <td>Lobby</td>
                                          </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float:right;">Clear</button>
                                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="float:right;">Simpan</button>
                              </div>
                          </div>
          </div>
</div>
</div>
</div>
@endsection
