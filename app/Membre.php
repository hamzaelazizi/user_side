<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    public function Prof(){
        return $this->hasOne(User::class);
    }

    public function Structure(){
        return $this->belongsTo(Structure::class);
    }

    public function Manifestations(){
        return $this->belongsToMany(Manifestation::class);
    }

    public function Conferences(){
        return $this->belongsToMany(Conference::class);
    }
    public function Articles(){
        return $this->belongsToMany(Article::class);
    }
    public function Chapters(){
        return $this->belongsToMany(Chapter::class);
    }
    public function Ouvrages(){
        return $this->belongsToMany(Ouvrage::class);
    }

    public function Doctorat(){
        return $this->hasMany(Doctorat::class);
    }

    public function Doc_sout(){
        return $this->hasOne(Doctorat::class, 'doctorant_id');
    }

}
