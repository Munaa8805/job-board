<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    public static array $experienceLevels = ['entry', 'intermediate', 'senior'];
    public static array $categories = [
        'IT',
        'Finance',
        'Marketing',
        'Sales',
        'HR',
        'Engineering',
        'Healthcare',
        'Education',
    ];
}
