<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
// todo => Model for Student
    use HasFactory;
    protected $fillable = [
        'name',
        'city',
        'marks',
    ];
}
