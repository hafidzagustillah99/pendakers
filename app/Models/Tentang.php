<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $table = "tentang";

    protected $fillable = [
        'daerahku', 'kepala_daerah', 'history'
    ];

    public function Daftar_Daerah(){
        return $this->belongsTo('App\Models\Daerah','daerahku','id');
    }
}
