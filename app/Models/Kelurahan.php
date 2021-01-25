<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = [
        'kode_kelurahan',
        'kelurahan',
        'id_kecamatan',
    ];

    public $timestamp = true;

    public function Rw(){
        return $this->hasMany('App\Rw', 'id_kelurahan');
    }
    public function Kelurahan(){
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan');
    }
}
