<?php

namespace Database\Seeders;

use App\Models\RealUrl;
use App\Models\ShortUrl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        RealUrl::factory(10)->create();
        ShortUrl::factory(10)->create();
    }
}
