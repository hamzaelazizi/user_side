<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function Membre(){
        return $this->belongsTo(Membre::class);
    }



    public function Structure(){
        return $this->hasOne(Structure::class, 'prof_id');
    }

    static public function Strmbr($prof){
        $strs= Structure::all();
        foreach($strs as $str){
            if($str['id'] == $prof->Membre->structure_id){
                return $str;  
            }
        }
        return null;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'profs';
}
