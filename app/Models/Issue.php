<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'reader_id',
        'book_id',
        'issue_date',
        'return_date',
    ];

    protected $casts = [
        'issue_date' => 'datetime',
        'return_date' => 'datetime'
    ];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
