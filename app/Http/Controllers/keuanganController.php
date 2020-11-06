<?php

namespace App\Http\Controllers;

use App\keuangan;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    public function index(){
        $keuangan = Keuangan::all();
        return view('keuangan.keuangankelas',['keuangan' => $keuangan]);
    }
}
