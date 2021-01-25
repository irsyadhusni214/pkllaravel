<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = [
        'kode_kecamatan',
        'kecamatan',
        'id_kota'
    ];

    protected $table = "kecamatans";

    public $timestamp = true;

    public function Kelurahan(){
        return $this->hasMany('App\Kelurahan', 'id_kecamatan');
    }
    public function Kota(){
        return $this->belongsTo('App\Models\Kota', 'id_kota');
    }
}
