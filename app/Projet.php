<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Projet extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\Post', 'user_id', 'id');
    }
    
    protected $dates = ['deleted_at'];

}
