<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useruser extends Model
{
    use HasFactory;

    protected $table = 'user_friends';

    protected $fillable = [
        'user',
        'friend',
        'friendship_status',
        'relationships'
    ];

    
}
