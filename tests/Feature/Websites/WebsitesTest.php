<?php

use App\Models\User;
use App\Models\Websites;

/**
 * @return void
 */
function createWebsiteData(): void
{
    Websites::factory()->create([
        'website_id' => fake()->randomNumber(2),
        'website_name' => fake()->domainName(),
    ]);

    Websites::factory()->create([
        'website_id' => fake()->randomNumber(2),
        'website_name' => fake()->domainName(),
    ]);
}

it('has websites list', function () {
    $user = User::factory()->create();

    createWebsiteData();

    $response = $this
        ->actingAs($user)
        ->get(route('website.show'));

    $response->assertOk();
    $response->assertJsonStructure();
});
