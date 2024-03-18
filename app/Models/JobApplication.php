<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $table = 'job_applications';
    protected $fillable = [
        'task_id',
        'user_id',
        'application_status',
        'cover',
        'status'
    ];
}
