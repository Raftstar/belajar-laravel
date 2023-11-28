<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    public function index()
    {
        $i = 1;
        $siswa = DB::table('siswa')->get();
        return view('data', ['siswa' => $siswa, 'i' => $i]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add image validation rules
        ]);

        $siswa = (object)[];

        if ($request->hasFile('image')) {
            $destination = public_path('/images');
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($destination, $filename);
            $siswa->image = $filename;
        }

        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'image' => $siswa->image ?? null,
        ]);

        return redirect('/data')->withSuccess('Data Berhasil Ditambahkan!!');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('id', $id)->first();

        return view('update', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        DB::table('siswa')->where('id', $id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            // sesuaikan dengan kolom-kolom di tabel 'siswa'
        ]);

        return redirect('/data')->withSuccess('Data Berhasil Diperbarui!!');
    }

    public function hapus($id)
    {
        DB::table('siswa')->where('id', $id)->delete();

        return redirect('/data')->withSuccess('Data Berhasil Dihapus!!');
    }
}
