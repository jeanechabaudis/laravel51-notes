<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = ['user_id','title', 'description'];

    //Mutators
    public function setTitleAttribute($val)
    {
    	$this->attributes['title'] = mb_strtoupper(trim($val), 'UTF-8');
    }

    //Accesors
    /*
    /Example
    public function getTitleAttribute($val)
    {
        return $val."-Accesors";
    }
    */

}
