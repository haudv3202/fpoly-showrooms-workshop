<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_log extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'Row 1',
        'Row 2',
        'Row 3',
    ];
}
