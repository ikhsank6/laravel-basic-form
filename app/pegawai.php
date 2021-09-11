<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    //
    protected $table = 'pegawai'; //nama tabel
    protected $primaryKey = 'id'; //primary key tablr pegawai
    protected $fillable = ['nama','alamat'];
}
