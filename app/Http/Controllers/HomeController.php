<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $laki_laki = DB::table('kependudukans')
            ->where('kelamin', 'laki - laki')->count();
        
        $perempuan = DB::table('kependudukans')
            ->where('kelamin', 'perempuan')->count();

        $total_penduduk = DB::table('kependudukans')->count();

        $kepala_keluarga = DB::table('kependudukans')
            ->where('shdrt', 'Kepala keluarga')->count();

        return view('dashboard', [
            'laki_laki' => $laki_laki,
            'perempuan' => $perempuan,
            'total_penduduk' => $total_penduduk,
            'kepala_keluarga' => $kepala_keluarga
        ]);
    }
}
