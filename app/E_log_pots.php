<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class E_log_pots extends Model
{
    protected $table = 'e_log_pots';
    protected $fillable = ['tgl_log', 'uraian_lap', 'jabatan', 'lampiran', 'ket'];
}
