<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technical_project extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'project_id',
        'technical_id',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function technical()
    {
        return $this->belongsTo(Technical::class);
    }
}
