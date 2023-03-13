<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeritaController extends Controller
{
    public function index(){
        return view('cerita');
    }
}