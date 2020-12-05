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
        // $file = $request->file('buktinih');
        $filebukti = $request->file('buktinih');

        $upload_di = 'absennih';
        $filebukti->move($upload_di, $filebukti->getClientOriginalName());

        Absensikela:: create([
            'tanggal' => $request->tanggal,
            'jumlahSiswaHadir' => $request->jumlahhadir,
            'jumlahKetidakhadiran' => $request->ketidakhadiran,
            'buktiKBM' => $filebukti->getClientOriginalName(),
            'kode' => $request->kode
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
        $absen->save();
        return redirect('/absen');
    }
}
