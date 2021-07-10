<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'comment', 'is_featured'];

    public function blog()
    {
    	return $this->belongsTo(Blog::class);
    }

}
