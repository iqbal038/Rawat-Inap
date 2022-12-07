@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Data Pasien</h1>
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
                        <th>Nama Pasien</th>
                        <th>Umur Pasien</th>
                        <th>Tanggal Lahir Pasien</th>
                        <th>No Telp Pasien</th>
                        <th>Gender Pasien</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <td> 
                                <div class="btn-group" role="group" aria-label="Basic example"> 
                                    <button type="button" id="btn-edit-buku" class="btn btn-success" data-toggle="modal" data-id="{{}}">
                                        Edit
                                    </button> 
                                    <button type="button" class="btn btn-danger" onclick="deleteConfirmation()">
                                        Hapus
                                    </button>
                                </div>
                            </td>
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
                                    <h5 class= "modal-title" id="exampleModalLabel">Tambah Data</5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="penulis">Nama Pasien</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="tahun">Umur</label>
                                            <input type="year"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="tahun">Tanggal lahir Pasien</label>
                                            <input type="date"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penerbit">Jenis Kelamin</label>
                                        <label class="mb-0 mr-3">
                                        <input type="radio" class="mr-1" name="gender"> Male
                                        </label>
                                        <label class="mb-0 mr-3">
                                        <input type="radio" class="mr-1" name="gender"> Female
                                        </label>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Alamat</label>
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