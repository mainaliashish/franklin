<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPreparation extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_name',
        'test_image',
        'slug',
        'test_description',
        'test_modules',
        'test_module_image',
        'test_results',
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
