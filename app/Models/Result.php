<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_tags',
        'number_of_visas_lodged', 
        'number_of_students_enrolled',
        'number_of_partner_universities',
        'years_of_excellence',
        'number_of_teams',
        'number_of_countries'
    ];
}
