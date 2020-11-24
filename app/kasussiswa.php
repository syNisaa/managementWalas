<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasussiswa extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = "kasussiswas";

    protected $fillable = ['id', 'namaSiswa', 'jenisKasus', 'point', 'Tanggal','kode'];
}
