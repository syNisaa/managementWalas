<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwalguru;
use PDF;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = jadwalguru::all();
        return view('jadwal.jadwal', ['jadwal' => $jadwal]);
    }

    public function cetak_pdf()
    {
    	$jadwal = Jadwalguru::all();
 
    	$pdf = PDF::loadview('laporan.jadwal-pdf',['jadwal'=>$jadwal]);
    	return $pdf->stream();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'hari' => 'required',
            'tanggal' => 'required',
            'nama_guru' => 'required',
            'mata_pelajaran' => 'required',
            'jam' => 'required'
            
        ]);

        jadwalguru::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'nama_guru' => $request->nama_guru,
            'mata_pelajaran' => $request->mata_pelajaran,
            'jam' => $request->jam
        ]);

        return redirect('/jadwal');
    }


    public function update($id, Request $request)
    {
        $jadwal = jadwalguru::find($id);
        $jadwal->hari = $request->hari;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->nama_guru = $request->nama_guru;
        $jadwal->mata_pelajaran = $request->mata_pelajaran;
        $jadwal->jam = $request->jam;

        $jadwal->save();
        return redirect('/jadwal');
    }

    public function delete($id)
    {
        $jadwal = jadwalguru::find($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }
}
