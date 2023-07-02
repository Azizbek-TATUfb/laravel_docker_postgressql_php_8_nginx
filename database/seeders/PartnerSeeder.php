<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->upsert([
            [
                "id" => 1,
                "attachment_id" => 4,
            ],
            [
                "id" => 2,
                "attachment_id" => 5,
            ],
            [
                "id" => 3,
                "attachment_id" => 6,
            ],
            [
                "id" => 4,
                "attachment_id" => 7,
            ],
            [
                "id" => 5,
                "attachment_id" => 8,
            ],
            [
                "id" => 6,
                "attachment_id" => 9,
            ],
            [
                "id" => 7,
                "attachment_id" => 10,
            ],
            [
                "id" => 8,
                "attachment_id" => 11,
            ],
        ],['id']);
    }
}
