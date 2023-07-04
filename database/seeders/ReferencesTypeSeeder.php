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
            [
                "id" => ReferencesType::SLIDER_ID,
                "name_uz" => "SLIDER",
                "name_ru" => "SLIDER",
                "name_en" => "SLIDER",
            ],
            [
                "id" => ReferencesType::ABOUT_COMPANY_ID,
                "name_uz" => "KOMPANYA HAQIDA",
                "name_ru" => "О КОМПАНИИ",
                "name_en" => "ABOUT COMPANY",
            ],
        ],['id']);
    }
}
