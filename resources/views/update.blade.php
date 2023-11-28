@extends('adminlte::page')

@section('title', 'Edit Data Siswa')

@section('content_header')
    <div class="alert alert-info d-flex">
        <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
        <p>Masukkan data dengan benar</p>
    </div>
    <h1>Edit Data Siswa</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/data/update/{{ $siswa->id }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $siswa->id }}">
                <label for="nama_siswa" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $siswa->nama }}">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{ $siswa->kelas }}">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan"
                    value="{{ $siswa->jurusan }}">
                <button type="submit" class="btn btn-success mt-4">Submit</button>
            </form>
        </div>
    </div>
@stop
