@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Data Pemeriksaan</h1>
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
                        <th>Kode Pemeriksaan</th>
                        <th>Kode Pasien</th>
                        <th>Diagnosa</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Hasil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="card-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">
                <i class="fa fa-plus">  Tambah Data Pemeriksaan</i>
            </button>
            <hr>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class= "modal-title" id="exampleModalLabel">Tambah Data Pasien Pemeriksaan</5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="penulis">Kode Pemeriksaan</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penulis">Kode Pasien</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="tahun">Berat Badan</label>
                                            <input type="year"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Diagnosa</label>
                                            <input type="text "class="form-control" name="cover" id="cover" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Tanggal Pemeriksaan</label>
                                            <input type="text "class="form-control" name="cover" id="cover" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Hasil</label>
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