<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(): HasMany
    {
        //creiamo la relazione one to many
        return $this->hasMany(Post::class);
    }
}
