@extends ('adminlte::page')
@section('title', 'Dasboard')

@section('content_header')
@stop

@section('content')
    <br><br>
    <div class="alert alert-warning d-flex">
        <i class="fas fa-fw fa-info-circle mr-3 mt-1">
        </i>
        <marquee><b>Mickhel</b> || Pastikan Data Yang Di Input, Edit Dan Hapus Dilakukan Dengan Benar ! Cek Kembali ! ||
            <b>SMK MULTIKARYA</b>
        </marquee>
    </div>
    <div class="pt-2">
        <div class="card ">
            <div class="card-header bg-primary">
                <h2>Data Siswa</h2>
            </div>

            <div class="card-body p-2">
                <a class="btn btn-primary m-3" href="/tambah" role="button"> <i class="fas fa-plus"></i> Tambah Data Siswa </a>
                <a class="btn btn-danger m-3" href="#" role="button"> <i class="fas fa-print"></i> print </a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr class="table-active">
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $siswa)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->jurusan }}</td>
                            <td>
                                @if ($siswa->image)
                                    <img src="{{ asset('/images/' . $siswa->image) }}" alt="Siswa Image" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary mb-1" href="/data/edit/{{ $siswa->id }}" role="button"> <i
                                        class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-danger mb-1" href="/data/hapus/{{ $siswa->id }}" role="button"> <i
                                        class="fas fa-delete"></i> Hapus </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('hello');
    </script>
    @include('sweetalert::alert')
@stop
