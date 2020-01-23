<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $admin = DB::table('users')->get();
        
        return view('Admin/index', ['admin' => $admin]);
    }
    
    public function hapus($id)
    {
        $admin = DB::table('users')->where('id', $id)->delete();

        return redirect('/admin');
    }
    
    public function tentang()
    {
        return view('Admin/tentang');
    }
}
