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
        'tanggal',
    ];

    protected $table = "kasus2s";

    public $timestamp = true;

    public function Rw(){
        return $this->belongsTo('App\Models\Rw', 'id_rw');
    }
}
