<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'kategori_pengeluaran';
    protected $primaryKey = 'id_kategori_pengeluaran';
    protected $fillable = ['jenis_pengeluaran'];
    public $timestamps = false;
}
