<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'kode_negara',
        'negara',
    ];

    public $timestamp = true;

    public function Kasus(){
        return $this->hasMany('App\Kasus', 'id_negara');
    }
}
