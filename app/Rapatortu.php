<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapatortu extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = "rapatortus";

    protected $fillable = ['id', 'materiPertemuan', 'tglPertemuan', 'jumlahHadir', 'bukti'];

}
