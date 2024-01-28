<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'phone',
        'email',
        'department',
        'role',
        'position'
    ];
}
