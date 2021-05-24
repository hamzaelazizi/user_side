<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorat extends Model
{
    //
    public function Doctorant(){
        return $this->belongsTo(Membre::class, 'doctorant_id');
    }
    public function Encadrant(){
        return $this->belongsTo(Membre::class);
    }
    protected $fillable = [
        'titre',
        'doctorant',
        'encadrant',
        'date',
    ];
}
