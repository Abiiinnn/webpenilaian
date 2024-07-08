<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';

    protected $fillable = [
        'nama_mata_pelajaran',
        'kode_mata_pelajaran',
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
