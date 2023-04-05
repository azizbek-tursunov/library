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

    public function readers()
    {
        return $this->hasMany(Reader::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }
}
