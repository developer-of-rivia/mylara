<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsToMany(User::class, 'user_user', 'user_id', 'user_id1');
        return $this->belongsToMany(User::class, 'user_user', 'user_id', 'user_id2');
    }

}