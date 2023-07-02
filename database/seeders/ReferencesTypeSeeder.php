<?php

namespace Database\Seeders;

use App\Models\Admin\Reference;
use App\Models\Admin\ReferencesType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesTypeSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        DB::table('references_types')->upsert([
            [
                "id" => ReferencesType::PRODUCTS_ID,
                "name_uz" => "MAHSULATLAR",
                "name_ru" => "ПРОДУКЦИЯ",
                "name_en" => "PRODUCTS",
            ],
            [
                "id" => ReferencesType::SERVICES_ID,
                "name_uz" => "XIZMATLAR",
                "name_ru" => "УСЛУГИ",
                "name_en" => "SERVICES",
            ],
        ],['id']);
    }
}
