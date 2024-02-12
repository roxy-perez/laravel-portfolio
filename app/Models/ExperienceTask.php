<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceTask extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "experience_id"
    ];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
