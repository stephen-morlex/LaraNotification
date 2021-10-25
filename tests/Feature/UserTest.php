<?php

it('can see about page', function () {
    $response = $this->get('/about');
    $response->assertStatus(200);
});
