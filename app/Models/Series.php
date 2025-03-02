<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_year',
        'episodes',
        'seasons',
        'average_rating',
    ];
}
