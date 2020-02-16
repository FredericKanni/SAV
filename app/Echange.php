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

}
