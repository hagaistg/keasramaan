<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
    protected $fillable = ['nama_asrama','pembina_asrama','jumlah_kamar','lokasi'];
}
