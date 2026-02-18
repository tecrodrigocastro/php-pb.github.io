<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content_blocks',
        'main_image_url',
        'main_image_upload',
        'category_id',
        'author_id',
        'published_at',
        'is_featured',
    ];

    protected $casts = [
        'content_blocks' => 'array',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')
            ->whereDate('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->published()->where('is_featured', true);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function getMainImage(): ?string
    {
        if ($this->main_image_upload) {
            return Storage::url($this->main_image_upload);
        }

        return $this->main_image_url;
    }
}
