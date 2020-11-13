<?php

namespace App\Http\Controllers;

use App\keuangan;
// use App\Keuangankela;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    public function index(){
        $keuangan = Keuangan::all();
        return view('keuangan.keuangankelas',['keuangan' => $keuangan]);
    }

    public function show($id){
        $keuangan = Keuangan::find($id);
        // return view('keuangan.show' ,compact('keuangan'));
        echo $keuangan;
    }
    
    public function tambah(Request $request){
        Keuangan::create([
            'bulan' => $request->bulan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'saldo' => $request->saldo
        ]);
        return redirect('/keuangan');
    }

    public function hapus($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();
        return redirect('/keuangan');
    }

    public function update(Request $request,$id)
    {
        $keuangan = Keuangan :: find($id);
        $keuangan->bulan = $request->bulan;
        $keuangan->pemasukan = $request->pemasukan;
        $keuangan->pengeluaran = $request->pengeluaran;
        $keuangan->saldo = $request->saldo;
        $keuangan->save();
        // return dd(keuangan);
        return redirect('/keuangan');
    }
}
