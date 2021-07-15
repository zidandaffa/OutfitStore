@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <br>
                      <h4 class="card-title">Data Pelanggan</h4>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hovered" id="table">
                        <thead>
                          <tr>
                            <th width="5%">No</th>
                            <th>Nama Pelanggan</th>
                            <th>Email</th>
                            <th>No Rekening</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pelanggan as $pel)
                            <tr>
                                <td align="center"></td>
                                <td>{{ $pel->name }}</td>
                                <td>{{ $pel->email }}</td>
                                <td>{{ $pel->detail }}, {{ $pel->kota }}, {{ $pel->prov }}</td>
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
          
@endsection
