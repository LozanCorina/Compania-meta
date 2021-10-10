<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table ="reports";
    protected $fillable=[
        'matches',
        'corners',
        'shots',
        'reviews',
        'trainings',
        'transfers',
        'profiling',
        'test',
        'scouting',
        'adm4_test',
        'm_4am',
        'm_5pm',
        'tag_trainer',
        'rating',
        'm_account',
        'user_id'
    ];

}
