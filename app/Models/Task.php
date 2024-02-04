<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;


    protected $table = 'task';
    protected $fillable = [
        'title',
        'description_task',
        'time_publication_date',
        'budget'
        'slug'

    ];
}
