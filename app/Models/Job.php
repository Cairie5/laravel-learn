<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// namespace is a way to organize your code into logical groups

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary'
    ];
}


