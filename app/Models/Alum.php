<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'graduation_year',
        'bio',
        'profile_picture',
        'skill_name',
        'proficiency_level',
        'experience_years',
        'certifications',
        'academic_achievements',
        'work_experience',
        'projects',
        'additional_info',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'graduation_year' => 'date',
    ];
}
