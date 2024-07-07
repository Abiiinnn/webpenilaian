<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nama_kelas',
        'guru_id',
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

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id'); // 'guru_id' adalah foreign key di tabel 'kelas'
    }
}
