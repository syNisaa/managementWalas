<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kela extends Model
{
      // use HasFactory;
      protected $primaryKey = 'id';
    
      protected $table = "kelas";
  
      protected $fillable = ['id', 'jurusan', 'kelas', 'kode'];
  
}
