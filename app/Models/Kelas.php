<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nama_kelas',
        'wali_kelas',
        'jumlah_siswa',
        'tingkat_kelas',
    ];
    
    public function murids()
    {
        return $this->hasMany(Murid::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
