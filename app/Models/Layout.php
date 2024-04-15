<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;
    public $fillable = [
        'col',
        'name',
        'address1',
        'address2',
        'numberPhone',
    ];
}
