<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            ReferencesTypeSeeder::class,
            AttachmentsSeeder::class,
            NewsSeeder::class,
            PartnerSeeder::class,
            ReferencesSeeder::class,
            SettingsSeeder::class
        ]);
    }
}
