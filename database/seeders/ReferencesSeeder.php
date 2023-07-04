<?php

namespace Database\Seeders;

use App\Models\Admin\ReferencesType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('references')->upsert([
            [
                "id" => 1,
                "references_type_id" => ReferencesType::SERVICES_ID,
                "attachment_id" => 12,
                "title_uz" => "Uskunalar xizmati",
                "title_ru" => "СЕРВИС ОБОРУДОВАНИЯ",
                "title_en" => "EQUIPMENT SERVICE",
                "excerpt_uz" => "Kompaniya taqdim etilgan barcha mahsulotlar uchun sotuvdan keyingi xizmatni taqdim etadi. Bizning muhandislarimiz ishlab chiqaruvchilardan tajriba va sertifikatlarga ega",
                "excerpt_ru" => "Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей",
                "excerpt_en" => "The company provides after-sales service for all products provided. Our engineers have experience and certificates from manufacturers",
            ],
            [
                "id" => 2,
                "references_type_id" => ReferencesType::SERVICES_ID,
                "attachment_id" => 13,
                "title_uz" => "Uskunalar xizmati",
                "title_ru" => "СЕРВИС ОБОРУДОВАНИЯ",
                "title_en" => "EQUIPMENT SERVICE",
                "excerpt_uz" => "Tibbiy buyumlar uchun ruxsatnomalar, ro'yxatga olish guvohnomalarini olishni ta'minlash. O'tkazish uchun ob'ektlarni tayyorlash",
                "excerpt_ru" => "Обеспечение получения разрешительных документов, регистрационного удостоверения на изделия медицинского назначения Подготовка объектов к проведению",
                "excerpt_en" => "Ensuring obtaining permits, registration certificates for medical devices Preparation of facilities for carrying out",
            ],
            [
                "id" => 3,
                "references_type_id" => ReferencesType::SERVICES_ID,
                "attachment_id" => 14,
                "title_uz" => "Uskunalar xizmati",
                "title_ru" => "СЕРВИС ОБОРУДОВАНИЯ",
                "title_en" => "EQUIPMENT SERVICE",
                "excerpt_uz" => "Kompaniya taqdim etilgan barcha mahsulotlar uchun sotuvdan keyingi xizmatni taqdim etadi. Bizning muhandislarimiz ishlab chiqaruvchilardan tajriba va sertifikatlarga ega",
                "excerpt_ru" => "Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей",
                "excerpt_en" => "The company provides after-sales service for all products provided. Our engineers have experience and certificates from manufacturers",
            ],
            [
                "id" => 4,
                "references_type_id" => ReferencesType::PRODUCTS_ID,
                "attachment_id" => 15,
                "title_uz" => "ENDOVASKULAR JARROYASI",
                "title_ru" => "ЭНДОВАСКУЛЯРНАЯ ХИРУРГИЯ",
                "title_en" => "ENDOVASCULAR SURGERY",
                "excerpt_uz" => "Kompaniya taqdim etilgan barcha mahsulotlar uchun sotuvdan keyingi xizmatni taqdim etadi. Bizning muhandislarimiz ishlab chiqaruvchilardan tajriba va sertifikatlarga ega",
                "excerpt_ru" => "Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей",
                "excerpt_en" => "The company provides after-sales service for all products provided. Our engineers have experience and certificates from manufacturers",
            ],
            [
                "id" => 5,
                "references_type_id" => ReferencesType::PRODUCTS_ID,
                "attachment_id" => 16,
                "title_uz" => "LABORATORIYA DIAGNOZI",
                "title_ru" => "ЛАБОРАТОРНАЯ ДИАГНОСТИКА",
                "title_en" => "LABORATORY DIAGNOSIS",
                "excerpt_uz" => "Tibbiy buyumlar uchun ruxsatnomalar, ro'yxatga olish guvohnomalarini olishni ta'minlash. O'tkazish uchun ob'ektlarni tayyorlash",
                "excerpt_ru" => "Обеспечение получения разрешительных документов, регистрационного удостоверения на изделия медицинского назначения Подготовка объектов к проведению",
                "excerpt_en" => "Ensuring obtaining permits, registration certificates for medical devices Preparation of facilities for carrying out",
            ],
            [
                "id" => 6,
                "references_type_id" => ReferencesType::PRODUCTS_ID,
                "attachment_id" => 17,
                "title_uz" => "YURAK JARRORIYASI",
                "title_ru" => "КАРДИОХИРУРГИЯ",
                "title_en" => "CARDIAC SURGERY",
                "excerpt_uz" => "Kompaniya taqdim etilgan barcha mahsulotlar uchun sotuvdan keyingi xizmatni taqdim etadi. Bizning muhandislarimiz ishlab chiqaruvchilardan tajriba va sertifikatlarga ega",
                "excerpt_ru" => "Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей",
                "excerpt_en" => "The company provides after-sales service for all products provided. Our engineers have experience and certificates from manufacturers",
            ],
            [
                "id" => 7,
                "references_type_id" => ReferencesType::PRODUCTS_ID,
                "attachment_id" => 18,
                "title_uz" => "QANDLI DABET",
                "title_ru" => "ДИАБЕТ",
                "title_en" => "DIABETES",
                "excerpt_uz" => "Kompaniya taqdim etilgan barcha mahsulotlar uchun sotuvdan keyingi xizmatni taqdim etadi. Bizning muhandislarimiz ishlab chiqaruvchilardan tajriba va sertifikatlarga ega",
                "excerpt_ru" => "Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей",
                "excerpt_en" => "The company provides after-sales service for all products provided. Our engineers have experience and certificates from manufacturers",
            ],
            [
                "id" => 8,
                "references_type_id" => ReferencesType::PRODUCTS_ID,
                "attachment_id" => 19,
                "title_uz" => "ARITMOLOGIYA",
                "title_ru" => "АРИТМОЛОГИЯ",
                "title_en" => "ARHYTHMOLOGY",
                "excerpt_uz" => "Tibbiy buyumlar uchun ruxsatnomalar, ro'yxatga olish guvohnomalarini olishni ta'minlash. O'tkazish uchun ob'ektlarni tayyorlash",
                "excerpt_ru" => "Обеспечение получения разрешительных документов, регистрационного удостоверения на изделия медицинского назначения Подготовка объектов к проведению",
                "excerpt_en" => "Ensuring obtaining permits, registration certificates for medical devices Preparation of facilities for carrying out",
            ],
            [
                "id" => 9,
                "references_type_id" => ReferencesType::PRODUCTS_ID,
                "attachment_id" => 20,
                "title_uz" => "ENDOUROLOGIYA",
                "title_ru" => "ЭНДОУРОЛОГИЯ",
                "title_en" => "ENDOUROLOGY",
                "excerpt_uz" => "Kompaniya taqdim etilgan barcha mahsulotlar uchun sotuvdan keyingi xizmatni taqdim etadi. Bizning muhandislarimiz ishlab chiqaruvchilardan tajriba va sertifikatlarga ega",
                "excerpt_ru" => "Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей",
                "excerpt_en" => "The company provides after-sales service for all products provided. Our engineers have experience and certificates from manufacturers",
            ],
            [
                "id" => 10,
                "references_type_id" => ReferencesType::SLIDER_ID,
                "attachment_id" => 21,
                "title_uz" => "ABL800 FLEX analizatori",
                "title_ru" => "Анализатор ABL800 FLEX",
                "title_en" => "ABL800 FLEX Analyzer",
                "excerpt_uz" => "ABL800 FLEX analizatori o'rta va yuqori unumdorlikdagi sinovlar uchun mo'ljallangan pH, qon gazlari, elektrolitlar, metabolitlar va oksimetriya kabi parametrlarning to'liq diapazonini o'lchaydi.",
                "excerpt_ru" => "Ориентированный на среднюю или высокую производительность тестов, анализатор ABL800 FLEX измеряет полный набор параметров, включая pH, газы крови, электролиты, метаболиты и показатели оксиметрии",
                "excerpt_en" => "Designed for medium to high performance tests, the ABL800 FLEX analyzer measures a full range of parameters including pH, blood gases, electrolytes, metabolites and oximetry",
            ],
            [
                "id" => 11,
                "references_type_id" => ReferencesType::SLIDER_ID,
                "attachment_id" => 21,
                "title_uz" => "ABL800 FLEX analizatori",
                "title_ru" => "Анализатор ABL800 FLEX",
                "title_en" => "ABL800 FLEX Analyzer",
                "excerpt_uz" => "ABL800 FLEX analizatori o'rta va yuqori unumdorlikdagi sinovlar uchun mo'ljallangan pH, qon gazlari, elektrolitlar, metabolitlar va oksimetriya kabi parametrlarning to'liq diapazonini o'lchaydi.",
                "excerpt_ru" => "Ориентированный на среднюю или высокую производительность тестов, анализатор ABL800 FLEX измеряет полный набор параметров, включая pH, газы крови, электролиты, метаболиты и показатели оксиметрии",
                "excerpt_en" => "Designed for medium to high performance tests, the ABL800 FLEX analyzer measures a full range of parameters including pH, blood gases, electrolytes, metabolites and oximetry",
            ],
            [
                "id" => 12,
                "references_type_id" => ReferencesType::SLIDER_ID,
                "attachment_id" => 21,
                "title_uz" => "ABL800 FLEX analizatori",
                "title_ru" => "Анализатор ABL800 FLEX",
                "title_en" => "ABL800 FLEX Analyzer",
                "excerpt_uz" => "ABL800 FLEX analizatori o'rta va yuqori unumdorlikdagi sinovlar uchun mo'ljallangan pH, qon gazlari, elektrolitlar, metabolitlar va oksimetriya kabi parametrlarning to'liq diapazonini o'lchaydi.",
                "excerpt_ru" => "Ориентированный на среднюю или высокую производительность тестов, анализатор ABL800 FLEX измеряет полный набор параметров, включая pH, газы крови, электролиты, метаболиты и показатели оксиметрии",
                "excerpt_en" => "Designed for medium to high performance tests, the ABL800 FLEX analyzer measures a full range of parameters including pH, blood gases, electrolytes, metabolites and oximetry",
            ],
        ],['id']);
    }
}

