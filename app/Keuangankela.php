<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangankela extends Model
{
    protected $table = 'keuangankelas';

    protected $fillable = ['id','bulan','pemasukan','pengeluaran','saldo', 'kode'];

}
