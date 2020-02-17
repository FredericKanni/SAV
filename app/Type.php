<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'type', 
    ];
    

    public function echanges(){
        return $this ->HasMany('App\Echanges', 'type_id');
    }
}
