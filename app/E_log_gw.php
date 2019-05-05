<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class E_log_gw extends Model
{
  protected $table = 'e_log_gw';
  protected $fillable = ['tgl_log', 'uraian_lap', 'jabatan', 'lampiran', 'ket'];
}
