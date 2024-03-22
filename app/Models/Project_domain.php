<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_domain extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'project_id',
        'subject_id',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
