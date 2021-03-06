<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nom', 'prenom', 'tel','mail'
    ];
    

    public function echanges(){
        return $this ->HasMany('App\Echanges', 'client_id');
    }
}
