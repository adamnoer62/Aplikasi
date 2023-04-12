<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    protected $fillable = ['nama_perusahaan', 'kategori_id', 'email_perusahaan', 'no_tlpn', 'alamat_perusahaan'];
public function kategori ()
{
return $this->belongsTo('App\Models\kategori');
}
}
