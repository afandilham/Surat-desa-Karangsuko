<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function login() {
        return view('login');
    }    
    
    public function dashboard() 
    {
        return view('dashboard');
    }

    public function kependudukan() 
    {
        return view('/Kependudukan/index');
    }
    
    public function surat()
    {
        return view('/Surat/index');
    }

    public function admin()
    {
        return view('/Admin/index');
    }
}
