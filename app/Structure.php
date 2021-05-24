<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    //
    public function Prof(){
        return $this->belongsTo(User::class, 'prof_id');
    }

    public function Membres(){
        return $this->hasMany(Membre::class);
    }

    public function Note(){
        return $this->hasOne(Note::class);
    }

    

}
