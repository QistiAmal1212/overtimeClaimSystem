<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maklumat_tuntutan extends Model
{

    
    use HasFactory;
    protected $table = 'maklumat_tuntutan'; protected $primaryKey = 'id_tuntutan';
    protected $fillable = [
        'tarikh',
        'hari',
        'bulan_tuntutan',
        'masa_mula_bekerja',
        'masa_akhir_bekerja',
        'jenis_hari',
        'jenis_waktu_bekerja',
        'jumlah_jam_bekerja',
        'catatan',
        'status',
    ];

}
