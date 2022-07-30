<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paser extends Model
{
    use HasFactory;

    protected $table = "paser";

    protected $fillable = [
        'tentang', 'mou', 'pks','tanggal', 'jangka_waktu', 'unitkerja', 'mitrakerja',
        'tahapan', 'tahun', 'file',
    ];
}
