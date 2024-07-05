<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';
    
    protected $fillable = [
        'nama',
        'alamat',
        'nama_orang_tua',
        'kota_lahir',
        'tanggal_lahir',
        'kelas_id',
    ];
}
