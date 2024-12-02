<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    // Optional: Explicitly declare the table name (not strictly required if the table name is 'conferences')
    protected $table = 'conferences';

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'description',
        'date_time',
        'location',
    ];
}
