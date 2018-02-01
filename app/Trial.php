<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    protected $fillable = [
        'user_id', 'end_at', 'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
