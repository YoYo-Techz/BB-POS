<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guard_name = 'web';

    protected $fillable = [
        'slug',
        'name_en',
        'name_mm',
        'limit_at',
        'img',
        'created_at'
    ];
}