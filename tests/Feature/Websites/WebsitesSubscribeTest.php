<?php

use App\Models\User;
use App\Models\Websites;

it('has test websites subscribe', function () {
    $user = User::factory()->create();
    $website = Websites::factory()->create();

    $subscribe = [
        [
            'user_id' => $user->id,
            'website_id' => $website->website_id,
            'website_name' => $website->website_name,
        ]
    ];

    $response = $this
        ->actingAs($user)
        ->postJson(route('website.subscribe'), ['subscribe' => $subscribe]);

    $response->assertOk();
    $response->assertJsonStructure([
       'status',
       'message'
    ]);
});
