<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuru extends Model
{
    use HasFactory;

    protected $table = 'tb_data_guru';

    protected $fillable = [
        'nip',
        'nama',
        'file_foto',
        'bidang',
        'jabatan',
    ];
}
