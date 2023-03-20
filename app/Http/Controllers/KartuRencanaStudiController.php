<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuRencanaStudi;

class KartuRencanaStudiController extends Controller
{
    public function index(){
        return view('krs',[
            'kartu_rencana_studi' => KartuRencanaStudi::all()
        ]);
    }
}
