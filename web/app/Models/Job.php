<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_openings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_title',
        'job_domain',
        'skills_required',
        'location',
        'type',
        'key_responsibilities',
        'job_description',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'skills_required' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get the job type options.
     *
     * @return array
     */
    public static function getTypeOptions(): array
    {
        return [
            'full_time' => 'Full Time',
            'part_time' => 'Part Time',
            'remote' => 'Remote',
            'internship' => 'Internship',
        ];
    }
}
