<?php

use App\Models\User;
use App\Models\Websites;

it('has test websites subscribe', function () {
    $user = User::factory()->create();

    $subscribe = [
        [
            'user_id' => User::factory()->create()->id,
            'website_id' => Websites::factory()->create()->website_id,
            'website_name' => Websites::factory()->create()->website_name,
        ]
    ];

    $response = $this
        ->actingAs($user)
        ->postJson(route('website.subscribe'), ['subscribe' => $subscribe]);

    $response->assertJsonStructure([
       'status',
       'message'
    ]);
});
