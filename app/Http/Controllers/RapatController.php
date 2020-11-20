<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rapatortu;

class RapatController extends Controller
{
    public function index()
    {
    	$rapat = Rapatortu::all();
		return view('rapat.rapat', ['rapat' => $rapat]);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'materi_pertemuan' => 'required',
			'tgl_pertemuan' => 'required',
			'jumlah_hadir' => 'required',
			'bukti' => 'required'
    	]);

    	Rapatortu::create([
    		'materiPertemuan' => $request->materi_pertemuan,
			'tglPertemuan' => $request->tgl_pertemuan,
			'jumlahHadir' => $request->jumlah_hadir,
			'bukti' => $request->bukti
    	]);
  
    	return redirect('/rapat');
    }

     public function update($id, Request $request)
    {
    		$this->validate($request,[
	    		'materi_pertemuan' => 'required',
				'tgl_pertemuan' => 'required',
				'jumlah_hadir' => 'required',
				'bukti' => 'required'
	    	]);

    		$rapat = Rapatortu::find($id);
    		$rapat->materiPertemuan = $request->materi_pertemuan;
			$rapat->tglPertemuan = $request->tgl_pertemuan;
			$rapat->jumlahHadir = $request->jumlah_hadir;
			$rapat->bukti = $request->bukti;
    		$rapat->save();
    		return redirect('/rapat');
    }

     public function delete($id)
    {
    		$rapat = Rapatortu::find($id);
    		$rapat->delete();
    		return redirect('/rapat');
    }    
}
