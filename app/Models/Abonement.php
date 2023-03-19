<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'book_id',
        'book_condition'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
