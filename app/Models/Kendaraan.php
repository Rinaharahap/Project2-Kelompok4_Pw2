<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $fillable = [
        'merek', 'pemilik', 'nopolisi', 'thn_beli', 'deskripsi', 'jenis_id', 'kapasitas_kursi', 'rating'
    ];

    public $timestamps = false;

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }
}
