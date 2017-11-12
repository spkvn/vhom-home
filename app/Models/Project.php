<?php

namespace VhomHome\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
