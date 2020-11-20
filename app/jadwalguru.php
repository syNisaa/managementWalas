<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalguru extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = "jadwals";

    protected $fillable = ['hari','tanggal','nama_guru','mata_pelajaran','jam'];

}
