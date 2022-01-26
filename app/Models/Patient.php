<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'doc_id',
        'firstname',
        'lastname',
        'email',
        'age',
        'address_id',
        'sex',
        'created_at',
        'updated_at',
        'email_verified_at',
    ];

    public function results() {
        return $this->hasMany(Result::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }

    public function data() {
        return $this->hasMany(PersonalData::class);
    }
}
