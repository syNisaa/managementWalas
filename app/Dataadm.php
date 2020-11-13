<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataadm extends Model
{
    // use HasFactory;
    protected $primaryKey = 'id';
    
    protected $table = "dataadms";

    protected $fillable = ['id', 'materiPokok', 'targetPengerjaan'];
}
