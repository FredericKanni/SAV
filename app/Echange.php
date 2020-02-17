<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echange extends Model
{
    protected $fillable = [
        'type', 'commentaire', 
    ];

    public function user(){
        return $this ->belongsTo('App\User', 'user_id');
    }

    public function client(){
        return $this ->belongsTo('App\Client', 'client_id');
    }

    public function type(){
        return $this ->belongsTo('App\Type', 'type_id');
    }

}
