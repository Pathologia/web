<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'subject',
        'message',
        'created_at',
        'updated_at',
    ];
}
