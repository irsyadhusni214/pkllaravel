<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $fillable = [
        'id_negara',
        'positif',
        'sembuh',   
        'meninggal',
    ];

    public $timestamp = true;

    public function Country(){
        return $this->belongsTo('App\Country', 'kode_negara');
    }
}
