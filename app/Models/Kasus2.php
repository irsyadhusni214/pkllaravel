<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    protected $fillable = [
        'id_rw',
        'positif',
        'sembuh',
        'meninggal',
    ];

    public $timestamp = true;

    public function Rw(){
        return $this->belongsTo('App\Rw', 'id_kelurahan');
    }
}
