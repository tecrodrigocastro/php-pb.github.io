<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Author extends Model
{
    protected $fillable = ['name', 'slug', 'bio', 'avatar'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getAvatar(): ?string
    {
        if ($this->avatar) {
            return Storage::url($this->avatar);
        }

        return null;
    }
}
