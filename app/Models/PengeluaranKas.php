<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranKas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pengeluaran_kas';
    protected $primaryKey = 'kode_pengeluaran';
    protected $fillable = ['kode_pengeluaran', 'email_user', 
    'jenis_pengeluaran', 'tanggal_pengeluaran', 'jumlah_pengeluaran', 'dokumentasi'];

    public function TblUser()
    {
        return $this->belongsTo(TblUser::class, 'email_user');
    }
}
