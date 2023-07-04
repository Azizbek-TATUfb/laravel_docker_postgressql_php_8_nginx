<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->upsert([
            [
                "id" => 1,
                "key" => "site_location",
                "name_uz" => "g.Tashkent, Chilanzar 10 <br>kvartal, dom 3/1",
                "name_ru" => "г.Ташкент, Чиланзар 10<br> квартал, дом 3/1",
                "name_en" => "g.Tashkent, Chilanzar 10<br> kvartal, dom 3/1",
                "status" => 1,
                "link" => "",
            ],
            [
                "id" => 2,
                "key" => "site_phone_one",
                "name_uz" => "+998712766253",
                "name_ru" => "+998712766253",
                "name_en" => "+998712766253",
                "status" => 1,
                "link" => "tel:+998712766253",
            ],
            [
                "id" => 3,
                "key" => "site_phone_two",
                "name_uz" => "+998712766254",
                "name_ru" => "+998712766254",
                "name_en" => "+998712766254",
                "status" => 1,
                "link" => "tel:+998712766254",
            ],
            [
                "id" => 4,
                "key" => "facebook_text",
                "name_uz" => "Bizning Facebook",
                "name_ru" => "Мы на Facebook",
                "name_en" => "We Facebook",
                "status" => 1,
                "link" => "",
            ],
            [
                "id" => 5,
                "key" => "site_email",
                "name_uz" => "info@medol.uz",
                "name_ru" => "info@medol.uz",
                "name_en" => "info@medol.uz",
                "status" => 1,
                "link" => "email:info@medol.uz",
            ],
            [
                "id" => 6,
                "key" => "footer_text",
                "name_uz" => "Maqsadimiz global muammolarni hal qilish orqali shaffof, uzoq muddatli biznes qurish, aholiga katta foyda keltirishdir. O‘zbekiston bozoriga innovatsion texnologiyalarni joriy etish.",
                "name_ru" => "Наша цель – построить прозрачный, долгосрочный бизнес, приносить огромную пользу населению, путем решения глобальных вопросов. Внедряя инновационные технологии на рынок Узбекистана.",
                "name_en" => "Our goal is to build a transparent, long-term business, bring great benefits to the population, by solving global issues. Introducing innovative technologies to the Uzbek market.",
                "status" => 1,
                "link" => "",
            ],
            [
                "id" => 7,
                "key" => "site_title",
                "name_uz" => "MEDOL - Medical Online Services",
                "name_ru" => "MEDOL - Medical Online Services",
                "name_en" => "MEDOL - Medical Online Services",
                "status" => 1,
                "link" => "",
            ],
            [
                "id" => 8,
                "key" => "site_footer_location",
                "name_uz" => "g.Tashkent, Chilanzar 10 <br>kvartal, dom 3/1",
                "name_ru" => "г.Ташкент, Чиланзар 10<br> квартал, дом 3/1",
                "name_en" => "g.Tashkent, Chilanzar 10<br> kvartal, dom 3/1",
                "status" => 1,
                "link" => "",
            ],
        ],['id']);
    }
}
