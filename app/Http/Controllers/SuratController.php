<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kependudukan;

class SuratController extends Controller
{

    public function index()
    {
        return view('Surat/index');
    }

        public function form_domisili()
        {
            $penduduk = Kependudukan::paginate(15);
            return view('/Surat/template/domisili/form_domisili', [
                'penduduk' => $penduduk
            ]);
        }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $penduduk = Kependudukan::where('nik', 'like', '%'. $cari . '%')
            ->orWhere('nama', 'like', '%'. $cari . '%')
            ->paginate(10);

        return view('/Surat/template/domisili/form_domisili', ['penduduk' => $penduduk]);
    }

    public function cetak_domisili($id)
    {
        $penduduk = Kependudukan::find($id);

        return view('/Surat/template/domisili/cetak_domisili', [
            'penduduk' => $penduduk
        ]);
    }

    public function print_domisili(Request $request)
    {
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $agama = $request->input('agama');
        $alamat = $request->input('alamat');
        $pekerjaan = $request->input('pekerjaan');
        $kelamin = $request->input('kelamin');
        $maksud = $request->input('maksud');

        return view('/Surat/template/domisili/cetak_pdf', [
            'nama' => $nama,
            'umur' => $umur,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'agama' => $agama,
            'alamat' => $alamat, 
            'pekerjaan' => $pekerjaan, 
            'kelamin' => $kelamin,
            'maksud' => $maksud
        ]);
    }
}
