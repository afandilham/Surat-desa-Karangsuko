<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

use App\Kependudukan;
use App\Pendidikan;

class KependudukanController extends Controller
{
    
    public function index()
    {
        $penduduk = Kependudukan::paginate(15);
        return view('/Kependudukan/index', [
            'penduduk' => $penduduk
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $penduduk = Kependudukan::where('nik', 'like', '%'. $cari . '%')
            ->orWhere('nama', 'like', '%'. $cari . '%')
            ->paginate(10);

        return view('/Kependudukan/index', ['penduduk' => $penduduk]);
    }

    public function tambah()
    {
        $pendidikan = Pendidikan::all();

        return view('/Kependudukan/tambah', ['pendidikan' => $pendidikan]);
    }

    public function store(Request $request)
    {
        // Pesan validasi untuk pengisian data kependudukan
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maximal :max karakter'
        ];

        // Validasi data kependudukan
        $this->validate($request, [
            'nik' => 'required|min:16|max:16',
            'no_kk' => 'required|min:16|max:20',
            'nama' => 'required|min:4|max:32',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'ibu' => 'required|min:5|max:32',
            'ayah' => 'required|min:5|max:32'
        ], $messages);

        // Insert data ke database menggunakan metode Eloquent
        Kependudukan::create([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'golongan_darah' => $request->golongan_darah,
            'agama' => $request->agama,
            'status' => $request->status,
            'shdrt' => $request->shdrt,
            'id_pendidikan' => $request->id_pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'ibu' => $request->ibu,
            'ayah' => $request->ayah
        ]);

        // Kembali ke sebelumnya awal ketika berhasil input data
        return redirect('/penduduk');

    }

    public function edit($id)
    {
        $penduduk = Kependudukan::find($id);
        $pendidikan = Pendidikan::all();

        return view('/Kependudukan/edit', [
            'penduduk' => $penduduk,
            'pendidikan' => $pendidikan
        ]);
    }

    public function update($id, Request $request) 
    {
        // Pesan validasi untuk pengisian data kependudukan
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maximal :max karakter'
        ];

        // Validasi data kependudukan
        $this->validate($request, [
            'nik' => 'required|min:16|max:16',
            'no_kk' => 'required|min:16|max:20',
            'nama' => 'required|min:4|max:32|unique',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'ibu' => 'required|min:5|max:32',
            'ayah' => 'required|min:5|max:32'
        ], $messages);

        $penduduk = Kependudukan::find($id);
        $penduduk->nik = $request->nik;
        $penduduk->no_kk = $request->no_kk;
        $penduduk->nama = $request->nama;
        $penduduk->kelamin = $request->kelamin;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->alamat = $request->alamat;
        $penduduk->golongan_darah = $request->golongan_darah;
        $penduduk->agama = $request->agama;
        $penduduk->status = $request->status;
        $penduduk->shdrt = $request->shdrt;
        $penduduk->id_pendidikan = $request->id_pendidikan;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->ibu = $request->ibu;
        $penduduk->ayah = $request->ayah;
        $penduduk->save();

        return redirect('/penduduk');
    }

    public function hapus($id)
    {
        $penduduk = Kependudukan::find($id);
        $penduduk->delete();

        return redirect('/penduduk');
    }
    
}
