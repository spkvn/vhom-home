<?php

namespace VhomHome\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public function projects()
    {
        return $this->morphedByMany(Project::class, 'taggable');
    }
}
