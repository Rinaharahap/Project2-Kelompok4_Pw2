<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis'; // Nama tabel yang ingin ditampilkan datanya

    protected $fillable = ['id', 'nama']; // Kolom yang dapat diisi

    public $timestamps = false; // Menonaktifkan kolom created_at dan updated_at

    public function jenis() // Definisi relasi dengan dirinya sendiri
    {
        return $this->belongsTo(Jenis::class);
    }
}
