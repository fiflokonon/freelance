<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $table = 'tasks';
    protected $fillable = [
        'job_title',
        'location',
        'job_region',
        'job_type',
        'job_description',
        'company_name',
        'company_tagline',
        'company_description',
        'company_website',
        'facebook_username',
        'twitter_username',
        'linkedin_username',
        'featured_image',
        'user_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
