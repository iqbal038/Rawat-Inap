@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
<h1 class="m-0 text-dark">Data Pasien</h1>
@stop   

@section('content')
<div class="container-fluid">
    <div class="card card-default">
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
                                        <label for="tahun">Umur Pasien</label>
                                            <input type="year"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="tahun">Tanggal lahir Pasien</label>
                                            <input type="date"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penulis">No Telp Pasien</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penulis">Alamat</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penerbit">Jenis Kelamin</label>
                                        <label class="mb-0 mr-3">
                                        <input type="radio" class="mr-1" name="gender"> Laki - Laki
                                        </label>
                                        <label class="mb-0 mr-3">
                                        <input type="radio" class="mr-1" name="gender"> Perempuan
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
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>Nama </th>
                        <th>Umur </th>
                        <th>Tanggal Lahir </th>
                        <th>Alamat</th>
                        <th>No Telp Pasien</th>
                        <th>Gender </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example"> 
                                    <button type="button" id="btn-edit-buku" class="btn btn-success" data-toggle="modal" data-target="#editBukuModal">
                                        Edit
                                    </button> 
                                    <button type="button" class="btn btn-danger" onclick="deleteConfirmation('' )">
                                        Hapus
                                    </button>
                                </div>
                            </td> 
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="editBukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Buku</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times; </span> 
                </button> 
            </div> 
            <div class="modal-body"> 
                <form method="post"  enctype="multipart/form-data"> 
                    @csrf
                    @method ('PATCH')
                    <div class="row"> 
                        <div class="col-md-6"> 
                            <div class="form-group"> 
                                <label for="edit-judul">Judul Buku</label> 
                                <input type="text" class="form-control" id="edit-judul" name="judul" required/>
                            </div> 
                            <div class="form-group">
                                <label for="edit-penulis">Penulis</label> 
                                <input type="text" class="form-control" name="penulis" id="edit-penulis" required/> 
                            </div> 
                            <div class="form-group"> 
                                <label for="edit-tahun">Tahun</label> 
                                <input type="year" class="form-control" name="tahun" id="edit-tahun" required/> 
                            </div> 
                            <div class="form-group"> 
                                <label for="edit-penerbit">Penerbit</label> 
                                <input type="text" class="form-control" name="penerbit" id="edit-penerbit" required/> 
                            </div> 
                        </div> 
                        <div class="col-and-6"> 
                            <div class="form-group" id="image-area"></div> 
                            <div class="form-group"> 
                                <label for="edit-cover">Cover</label> 
                                <input type="file" class="form-control" name="cover" id="edit-cover"/> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class="modal-footer"> 
                    <input type="hidden" name="id" id="edit-id"/> 
                    <input type="hidden" name="old_cover" id="edit-old-cover"/> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
                    <button type="submit" class="btn btn-success">Update</button> 
                </form> 
            </div> 
        </div> 
    </div> 
</div>
@endsection