<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camisa extends Model
{
    protected $fillable = ['imagen', 'user_id', 'talla'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
