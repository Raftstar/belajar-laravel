    @extends('adminlte::page')

    @section('title', 'Dashboard')

    @section('content_header')
        <h1>Dashboard</h1>
    @stop

    @section('content')
        <br><br>
        <div class="alert alert-warning d-flex">
            <i class="fas fa-fw fa-info-circle mr-3 mt-1">
            </i>
            <marquee><b>Mickhel</b> || Pastikan Data Yang Di Input dengan benar ! Cek Kembali ! ||
                <b>SMK MULTIKARYA</b>
            </marquee>
        </div>
        <center>
            <h2>Tambah Data</h2>
        </center>
        <div class="container" style="margin-top:80px">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Tambah Siswa
                        </div>
                        <div class="card-body">
                            <form method="post" action="/data/store" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama" placeholder="Masukan Nama Siswa"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>kelas</label>
                                    <input type="text" name="kelas" placeholder="Masukan kelas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" placeholder="Masukan Nama Jurusan"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>image</label>
                                    <input type="file" name="image" placeholder="Masukan Gambar" class="form-control">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    @stop
