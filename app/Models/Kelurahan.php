<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = [
        'kode_kelurahan',
        'kelurahan',
        'id_kecamatan'
    ];

    protected $table = "kelurahans";

    public $timestamp = true;

    public function Rw(){
        return $this->hasMany('App\Rw', 'id_kelurahan');
    }
    public function Kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }
}
