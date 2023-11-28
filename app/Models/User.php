<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'email_user';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['email_user', 'password', 'foto_profil', 'role'];
    public $timestamps = false;
    protected $hidden = ['password'];
}
?>