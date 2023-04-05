<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = [
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
        return $this->belongsToThrough(Major::class, Group::class);
    }

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }
}
