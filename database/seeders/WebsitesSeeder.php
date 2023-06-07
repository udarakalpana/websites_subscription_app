<?php

namespace Database\Seeders;

use App\Models\Websites;
use Illuminate\Database\Seeder;

class WebsitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Websites::factory()->count(10)->create();
    }
}
