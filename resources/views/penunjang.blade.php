@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Data Penunjang</h1>
@stop   

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">{{__('')}}</div>
        <div class="card-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>Kode Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Riwayat Penyakit</th>
                        <th>Alergi</th>
                        <th>Tensi</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">
                <i class="fa fa-plus">  Tambah Data</i>
            </button>
            <hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class= "modal-title" id="exampleModalLabel">Tambah Data Pasien Penunjang</5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group" >
                                        <label for="penulis">Kode Pasien</label>
                                        <select name="city" id="city" class="form-control">
                                        <option value="">Mikel</option>
                                        <option value="">SAEPUL</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="penulis">Nama Pasien</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="tahun">Berat Badan</label>
                                            <input type="year"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Tinggi Badan</label>
                                            <input type="text "class="form-control" name="cover" id="cover" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Riwayat Penyakit</label>
                                            <input type="text "class="form-control" name="cover" id="cover" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Alergi</label>
                                            <input type="text "class="form-control" name="cover" id="cover" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Tensi</label>
                                            <input type="text "class="form-control" name="cover" id="cover" required/>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection