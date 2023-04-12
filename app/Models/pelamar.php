<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelamar extends Model
{
    protected $fillable = ['nama_pelamar_user', 'studi_id', 'fakultas_id', 'gendre_user','email_user','no_tlp','tgl_lahir', 'file'];
    public function studi ()
    {
    return $this->belongsTo('App\Models\studi');
    }
    public function fakultas ()
    {
    return $this->belongsTo('App\Models\fakultas');
    }
}
