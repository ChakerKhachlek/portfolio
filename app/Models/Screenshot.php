<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Screenshot extends Model
{
    use HasFactory;

    protected $fillable=['link','project_id'];
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
