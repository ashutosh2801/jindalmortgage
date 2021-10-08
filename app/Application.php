<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application_applied';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
