<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'description',
        'company',
        'company_url',
        'start_date',
        'end_date',
        'job_type',
    ];

    public function tasks():HasMany
    {
        return $this->hasMany(ExperienceTask::class);
    }
}
