<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class namayande extends Model
{
    //

    protected $fillable = ['name', 'hoze', 'code', 'province_id'];

    public function state()
    {
        return $this->hasOne('App\Province');
    }
}
