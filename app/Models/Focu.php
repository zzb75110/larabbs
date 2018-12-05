<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Focu extends Model
{
    protected $fillable = ['user_id', 'focus_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function focus()
    {
        return $this->belongsTo(User::class,'focus_id');
    }
}
