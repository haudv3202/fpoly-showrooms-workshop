<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'deploy_link',
        'level_id',
        'added_by',
        'is_highlight',
        'views',
        'is_active',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technical_project()
    {
        return $this->hasOne(Technical_project::class);
    }

}
