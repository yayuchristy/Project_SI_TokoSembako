<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
   # memanggil database
   use HasFactory;
   protected $tabel='karyawans';
   // protected $fillable = ['Kode_Karyawan', 'Nama_Karyawan', 'No_Telp_Karyawan'];
   // protected $guarded = [];
}
