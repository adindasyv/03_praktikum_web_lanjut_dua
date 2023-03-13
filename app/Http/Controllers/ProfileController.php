<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view(('profile'))
        ->with('nama', 'Adinda Wahyu Luchmansyahvira')
        ->with('jurusan', 'Teknik Informatika')
        ->with('nim', '2141720096')
        ->with('kelas', 'TI - 2H')
        ->with('absen', '05');
    }
}