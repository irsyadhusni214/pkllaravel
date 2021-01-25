<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{   
    protected $fillable = [
        'kode_provinsi',
        'provinsi',
    ];
    public $timestamp = true;

    public function Kota(){
        return $this->hasMany('App\Kota', 'id_provinsi');
    }
}
