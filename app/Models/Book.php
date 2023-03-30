<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'name',
        'author',
        'about',
        'status',
    ];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
