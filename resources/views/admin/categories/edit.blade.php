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
                      <h4 class="card-title">Edit Kategori</h4>
                      </div>
                      <div class="col text-right">
                      <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-primary">Kembali</a>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('admin.categories.update',['id' => $categorie->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                <label for="exampleInputUsername1">Nama Kategori</label>
                                <input type="text" class="form-control" name="name" value="{{ $categorie->name }}">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success text-right">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
@endsection
