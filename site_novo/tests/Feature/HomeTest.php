<?php

test('the home page loads successfully with all landing sections', function () {
    $response = $this->get(route('home'));

    $response->assertStatus(200);
    $response->assertSeeLivewire('landing.header');
    $response->assertSeeLivewire('landing.hero-v2');
    $response->assertSeeLivewire('landing.activity-feed');
    $response->assertSeeLivewire('landing.about');
    $response->assertSeeLivewire('landing.featured-members');
    $response->assertSeeLivewire('landing.features');
    $response->assertSeeLivewire('landing.events-timeline');
    $response->assertSeeLivewire('landing.blog-preview');
    $response->assertSeeLivewire('landing.community');
    $response->assertSeeLivewire('landing.cta-final');
    $response->assertSeeLivewire('landing.footer');
});
