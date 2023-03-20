<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'major_id',
        'group_id',
        'name',
        'surname',
        'middle_name',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
