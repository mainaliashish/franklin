<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudyAbroad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'country_name',
        'slug',
        'country_description',
        'country_image',
        'education_system',
        'education_system_image',
        'cost_of_studies',
        'cost_of_studies_image',
        'living_and_working',
        'visa_procedures',
        'offered_courses',
        'popular_universities',
        'meta_title',
        'meta_description',
        'meta_tags',
    ];

    // Use Slug instead of ID
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
