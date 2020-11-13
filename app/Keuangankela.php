<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangankela extends Model
{
    // use HasFactory;
    protected $primaryKey = 'id';
  
    protected $table = "keuangankelas";

    protected $fillable = ['id', 'bulan', 'pemasukan', 'pengeluaran', 'saldo'];
    
}
