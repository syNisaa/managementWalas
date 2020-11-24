<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kela;
use App\Keuangan;
use App\Absensikela;
use App\Dataadm;
use App\Kasussiswa;
use App\Rapat;
use App\Datasiswa;

use Session;

class DashController extends Controller
{
    public function showkelas(){
        $kelass = Kela::all();
        return view('dashboardWalas', ['kelass' => $kelass]);
    }

    public function main()
    {
        return view('bagian.sidebar');
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
    
}
