<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;
    protected $table = 'tb_visi_misi';
    protected $fillable = [
        'id',
        'deskripsi',
    ];
}