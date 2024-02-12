<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'name',
        'email',
        'title',
        'linkedin',
        'github',
        'hero_gif',
        'pronouns',
        'location',
        'languages',
        'pit_animal',
    ];
}
