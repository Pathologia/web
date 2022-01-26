<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryAction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'label',
        'user_id',
        'user_agent',
        'ip_address',
        'session_name',
        'created_at',
        'updated_at',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
