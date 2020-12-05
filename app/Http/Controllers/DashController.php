<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\kela;
use App\Keuangan;
use App\Absensikela;
use App\Dataadm;
use App\Kasussiswa;
use App\Rapat;
use App\Datasiswa;
use App\Jadwalguru;
use PDF;

use Session;

class DashController extends Controller
{
    public function showkelas(){
        $kelass = Kela::all();
        return view('dashboardWalas', ['kelass' => $kelass]);
    }

    public function main()
    {
        return view('dashboard');
    }

    public function countuser(){
       
        return view('dashboard',);
    }

    public function check(Request $request){
        $kode = $request->input('kode');

        $cek = DB::table('kelas')->where(['kode'=> $kode])->first();

        if($cek->kode == $kode){
            $request->session()->put('kode',$kode);
            return redirect('/tampil');
        }else {
            return redirect('/gagal');
        }
    }

    public function show(Request $request){
        if($request->session()->has('kode')){
            $keuangan = Keuangan::where('kode', $request->session()->get('kode'))->get();
            return view('keuangan.keuangankelas' , ['keuangan'=> $keuangan]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showabsen(Request $request){
        if($request->session()->has('kode')){
            $absen = Absensikela::where('kode', $request->session()->get('kode'))->get();
            return view('absen.absen', ['absen'=>$absen]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showadm(Request $request){
        if($request->session()->has('kode')){
            $adm = Dataadm::where('kode', $request->session()->get('kode'))->get();
            return view('adm.admwalas', ['adm_walass' => $adm]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showkasus(Request $request){
        if($request->session()->has('kode')){
            $kasus = Kasussiswa::where('kode', $request->session()->get('kode'))->get();
            return view('kasus.kasus', ['kasussiswa' => $kasus]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showrapat(Request $request){
        if($request->session()->has('kode')){
            $jadwal = Rapat::where('kode', $request->session()->get('kode'))->get();
            return view('rapat.index', ['jadwals' => $jadwal]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }
    
    public function showsiswa(Request $request){
        if($request->session()->has('kode')){
            $siswas = Datasiswa::where('kode', $request->session()->get('kode'))->get();
            return view('datasiswa.siswa', ['siswas' => $siswas]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showjadwal(Request $request){
        if($request->session()->has('kode')){
            $jadwal = jadwalguru::where('kode', $request->session()->get('kode'))->get();
            return view('jadwal.jadwal', ['jadwal' => $jadwal]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }
    public function cetak_pdff(Request $request)
    {
        if($request->session()->has('kode')){
           $absen = absensikela::where('kode', $request->session()->get('kode'))->get();
 
            $pdf = PDF::loadview('laporan.absen-pdf',['absen'=>$absen]);
            return $pdf->download('Report-Absensi.pdf');
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function cetak_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $jadwal = Jadwalguru::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = PDF::loadview('laporan.jadwal-pdf',['jadwal'=>$jadwal]);
    	    return $pdf->download('report.pdf');
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function siswa_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $siswas = Datasiswa::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = PDF::loadview('laporan.siswa-pdf',['siswas'=>$siswas]);
    	    return $pdf->download('siswa.pdf');
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function adm_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $adm = Dataadm::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = PDF::loadview('laporan.adm-pdf',['a'=>$adm]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function keuangan_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $keuangan = Keuangan::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = PDF::loadview('laporan.keuangan-pdf',['u'=>$keuangan]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function kasus_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $kasus = Kasussiswa::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = PDF::loadview('laporan.kasus-pdf',['k'=>$kasus]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function rapat_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $jadwal = Rapat::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = PDF::loadview('laporan.rapat-pdf',['r'=>$jadwal]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

}
