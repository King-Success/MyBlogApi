<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function Article() {
        return $this->belongsTo('App\Article');
    }
}
