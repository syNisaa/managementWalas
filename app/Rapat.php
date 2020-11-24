<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    //
    protected $primaryKey = 'id_jadwal';
    
    protected $table = "rapats";

    protected $fillable = ['id_jadwal', 'materi_pertemuan', 'date', 'jml_hadir', 'bukti','kode'];
}
