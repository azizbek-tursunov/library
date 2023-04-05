<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'reader_id',
    ];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

     public function major()
     {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }
}
