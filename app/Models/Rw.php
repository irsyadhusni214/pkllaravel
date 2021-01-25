<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $fillable = [
        'id_kelurahan',
        'nama',
    ];

    public $timestamp = true;

    public function Rw(){
        return $this->belongsTo('App\Kelurahan', 'id_kelurahan');
    }
    public function Kasus2(){
        return $this->hasMany('App\Kasus2', 'id_rw');
    }
}
