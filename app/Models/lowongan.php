<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    protected $fillable = ['judul_lowongan', 'lokasi_id', 'pekerjaan_id','ipk', 'tgl_pasang', 'salary', 'job_time'];
    public function lokasi ()
    {
    return $this->belongsTo('App\Models\lokasi');
    }
    public function pekerjaan ()
    {
    return $this->belongsTo('App\Models\pekerjaan');
    }
}
