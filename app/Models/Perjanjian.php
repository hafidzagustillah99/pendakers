<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjanjian extends Model
{
    use HasFactory;

    protected $table = "perjanjian";

    protected $fillable = [
        'bidang_kerjasama', 'tanggal', 'mou', 'pks', 'jangka_waktu', 'pihak', 'instansi',
        'keterangan', 'catatan','id_nama_daerah'
    ];

    public function Kota(){
        return $this->belongsTo('App\Models\Kota','id_nama_daerah','id');
    }
}
