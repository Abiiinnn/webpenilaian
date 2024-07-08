<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    
    protected $table = 'nilai';

    protected $fillable = [
        'kelas_id',
        'murid_id',
        'mata_pelajaran_id',
        'nilai',
    ];

    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(Mata_Pelajaran::class,'mata_pelajaran_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
