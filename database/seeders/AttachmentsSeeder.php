<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('references_types')->upsert([
            [
                "id" => 1,
                "path" => "/app/images/news/photo_1687515020.webp",
                "status" => 1,
            ],
            [
                "id" => 2,
                "path" => "/app/images/news/photo_1687516061.webp",
                "status" => 1,
            ],
            [
                "id" => 3,
                "path" => "/app/images/news/photo_1687516125.webp",
                "status" => 1,
            ],
            [
                "id" => 4,
                "path" => "/app/images/partner-1.webp",
                "status" => 1,
            ],
            [
                "id" => 5,
                "path" => "/app/images/partner-2.webp",
                "status" => 1,
            ],
            [
                "id" => 6,
                "path" => "/app/images/partner-3.webp",
                "status" => 1,
            ],
            [
                "id" => 7,
                "path" => "/app/images/partner-4.webp",
                "status" => 1,
            ],
            [
                "id" => 8,
                "path" => "/app/images/partner-5.webp",
                "status" => 1,
            ],
            [
                "id" => 9,
                "path" => "/app/images/partner-6.webp",
                "status" => 1,
            ],
            [
                "id" => 10,
                "path" => "/app/images/partner-7.webp",
                "status" => 1,
            ],
            [
                "id" => 11,
                "path" => "/app/images/partner-8.webp",
                "status" => 1,
            ]
        ],['id']);
    }
}
