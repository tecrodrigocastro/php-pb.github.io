<?php

test('the home page loads successfully with all landing sections', function () {
    $response = $this->get(route('home'));

    $response->assertStatus(200);
    $response->assertSeeLivewire('landing.header');
    $response->assertSeeLivewire('landing.hero');
    $response->assertSeeLivewire('landing.about');
    $response->assertSeeLivewire('landing.features');
    $response->assertSeeLivewire('landing.community');
    $response->assertSeeLivewire('landing.footer');
});
