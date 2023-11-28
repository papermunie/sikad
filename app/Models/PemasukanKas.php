<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemasukanKas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pemasukan_kas';
    protected $primaryKey = 'kode_pemasukan';
    protected $fillable = ['kode_pemasukan',
    'id_kategori_pemasukan', 'tanggal_pemasukan', 'jenis_pemasukan'];
}
