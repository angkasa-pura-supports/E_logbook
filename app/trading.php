<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trading extends Model
{
    protected $table = "trading";
    public $fillabel = ['nama_project','no_kontrak','tgl_kontrak','jangka_waktu','nilai_total','ket'];
}
