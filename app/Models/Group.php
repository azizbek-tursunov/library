<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'major_id',
        'name',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
