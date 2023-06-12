<?php

use App\Models\User;
use App\Models\Websites;
use App\Models\Posts;

it('has test post create', function () {
    $user = User::factory()->create();
    $post = Posts::factory()->create();

    $post = [
        [
            'user_id' => $post->user_id,
            'website_id' => $post->website_id,
            'post_title' => $post->post_title,
            'post_body' => $post->post_body,
        ]
    ];

    $response = $this
        ->actingAs($user)
        ->postJson(route('post.create'), ['post' => $post]);

    $response->assertOk();
    $response->assertJsonStructure([
        'status',
        'message'
    ]);

});
