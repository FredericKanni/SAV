<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nom', 'prenom', 'tel','mail'
    ];
    

    // public function users(){
    //     return $this ->belongsToMany('App\User')
    // }
}
