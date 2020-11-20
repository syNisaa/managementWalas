<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kela;

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
            // echo "yey";
            return redirect('/tampil');
        }else {
            echo "yah";
        }

    }
}
