<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'Like';

    protected $fillable = [
        'like',
        'following_user_like',
        'count_like'
    ];
}
