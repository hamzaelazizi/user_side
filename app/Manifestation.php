<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    //
    public function Organisateurs(){
        return $this->belongsToMany(Membre::class);
    }

    public function Orgaexts(){
        return $this->hasMany(Orgaext::class);
    }
    protected $fillable = [
        'titre',
        'date',
        'type',
        'lien',
        'publisher',
    ];
}


// $manifestation->Organisateurs()->Attach($Membres);