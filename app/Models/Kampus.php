<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'kampus'; // Nama tabel yang ingin ditampilkan datanya

    protected $fillable = ['nama', 'alamat', 'latitude', 'longitude']; // Kolom yang dapat diisi

    public $timestamps = false; // Menonaktifkan kolom created_at dan updated_at
}
