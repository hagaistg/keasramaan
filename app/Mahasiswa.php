<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswas';
     protected $fillable = ['nama_mahasiswa','prodi_mahasiswa','angkatan','id_user'];
     
}
