<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'patient_id',
        'data_json',
        'created_at',
        'updated_at',
    ];
    public function patient() {
        return $this->belongsTo(Role::class, 'patient_id');
    }
}
