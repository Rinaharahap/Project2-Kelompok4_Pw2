<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaParkir extends Model
{
    protected $table = 'area_parkir';

    protected $fillable = ['nama', 'kapasitas', 'keterangan', 'kampus_id'];

    public $timestamps = false; // Menonaktifkan otomatisasi timestamp

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'kampus_id');
    }
}
