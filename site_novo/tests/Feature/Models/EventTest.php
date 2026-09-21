<?php

use App\Models\Event;
use Illuminate\Support\Facades\Storage;

test('published scope only returns events with a published_at in the past', function () {
    $published = Event::factory()->create(['published_at' => now()->subDay()]);
    Event::factory()->unpublished()->create();

    expect(Event::published()->get())->toHaveCount(1)
        ->and(Event::published()->first()->id)->toBe($published->id);
});

test('upcoming scope only returns events starting in the future', function () {
    $upcoming = Event::factory()->create(['starts_at' => now()->addDay()]);
    Event::factory()->past()->create();

    expect(Event::upcoming()->get())->toHaveCount(1)
        ->and(Event::upcoming()->first()->id)->toBe($upcoming->id);
});

test('getBanner returns the storage url when a banner is set', function () {
    $event = Event::factory()->create(['banner' => 'events/banner.jpg']);

    expect($event->getBanner())->toBe(Storage::disk('public')->url('events/banner.jpg'));
});

test('getBanner returns null when there is no banner', function () {
    $event = Event::factory()->create(['banner' => null]);

    expect($event->getBanner())->toBeNull();
});
