<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;

class AdmController extends Controller
{
    public function index()
    {
        $adm = Adm::all();
        return view('walas.adm.adm', ['adm_walass' => $adm]);
    }

    public function tambah()
    {
        return view('walas.adm.tambah_adm');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'materi_pokok' => 'required',
            'target_pengerjaan' => 'required'
        ]);

        Adm::create([
            'materi_pokok' => $request->materi_pokok,
            'target_pengerjaan' => $request->target_pengerjaan
        ]);

        return redirect('/adm');
    }

    public function edit($id)
    {
        $adm_walass = Adm::find($id);
        return view('walas.adm.edit_adm', ['adm_walass' => $adm_walass]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'materi_pokok' => 'required',
            'target_pengerjaan' => 'required'
        ]);

        $adm_walass = Adm::find($id);
        $adm_walass->materi_pokok = $request->materi_pokok;
        $adm_walass->target_pengerjaan = $request->target_pengerjaan;
        $adm_walass->save();
        return redirect('/adm');
    }

    public function delete($id)
{
    $adm = Adm::find($id);
    $adm->delete();
    return redirect('/adm');
}
}
