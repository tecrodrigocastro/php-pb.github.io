<?php

use App\Models\Author;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

test('it has many posts', function () {
    $author = Author::factory()->create();
    $posts = Post::factory()->count(2)->create(['author_id' => $author->id]);
    Post::factory()->create();

    expect($author->posts)->toHaveCount(2)
        ->and($author->posts->pluck('id')->sort()->values()->all())
        ->toBe($posts->pluck('id')->sort()->values()->all());
});

test('getAvatar returns the storage url when an avatar is set', function () {
    $author = Author::factory()->create(['avatar' => 'authors/avatar.jpg']);

    expect($author->getAvatar())->toBe(Storage::disk('public')->url('authors/avatar.jpg'));
});

test('getAvatar returns null when there is no avatar', function () {
    $author = Author::factory()->create(['avatar' => null]);

    expect($author->getAvatar())->toBeNull();
});
