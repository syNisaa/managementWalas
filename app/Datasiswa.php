<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = "datasiswas";

    protected $fillable = ['id', 'nama', 'kelas','phone','email','status','kode'];
}
