<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensikela;

class AbsensiController extends Controller
{
    public function index(){
        $absen = Absensikela::all();
        return view('absen.absen', ['absen'=>$absen]);
    }

    public function tambah(Request $request ){
        Absensikela:: create([
            'tanggal' => $request->tanggal,
            'jumlahSiswaHadir' => $request->jumlahhadir,
            'jumlahKetidakhadiran' => $request->ketidakhadiran,
            'namaSiswaTidakHadir' => $request->siswatidakhadir,
            'buktiKBM' => $request->buktigambar,
        ]);
        return redirect('/absen');
    }

    public function hapus($id)
    {
        $absen = Absensikela::find($id);
        $absen->delete();
        return redirect('/absen');
    }

    public function update(Request $request,$id)
    {
        $absen = Absensikela :: find($id);
        $absen->tanggal = $request->tanggal;
        $absen->jumlahSiswaHadir = $request->jumlahhadir;
        $absen->jumlahKetidakhadiran = $request->ketidakhadiran;
        $absen->namaSiswaTidakHadir = $request->siswatidakhadir;
        $absen->buktiKBM = $request->buktigambar;
        $absen->save();
        return redirect('/absen');
    }
}
