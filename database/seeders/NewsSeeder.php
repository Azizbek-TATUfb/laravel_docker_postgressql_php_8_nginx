<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        DB::table('references_types')->upsert([
            [
                "id" => 1,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 1,
            ],
            [
                "id" => 2,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 2,
            ],
            [
                "id" => 3,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 3,
            ],
            [
                "id" => 3,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 3,
            ],
            [
                "id" => 4,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 1,
            ],
            [
                "id" => 5,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 2,
            ],
            [
                "id" => 6,
                "slug_uz" => "gallyamov-eduard-abdulkhaevich-ijrosidagi-mahorat-darsi",
                "slug_ru" => "master-klass-v-ispolnenii-gallyamova-eduarda-abdulxaevica",
                "slug_en" => "master-class-performed-by-gallyamov-eduard-abdulkhaevich",
                "title_uz" => "Gallyamov Eduard Abdulkhaevich ijrosidagi mahorat darsi",
                "title_ru" => "Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича",
                "title_en" => "Master class performed by Gallyamov Eduard Abdulkhaevich",
                "excerpt_uz" => "19 apreldan 21 aprelga qadar “RSNPMTSU” AJda (Respublika ixtisoslashtirilgan urologiya ilmiy-amaliy tibbiyot markazi) Ethicon Endo Surgery (Johnson&Johnson) va XK “Medical Online Services” MChJ ko‘magida mahorat darsi bo‘lib o‘tdi...",
                "excerpt_ru" => "С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...",
                "excerpt_en" => 'From April 19 to April 21, a master class was held at JSC "RSNPMTSU" (Republican Specialized Scientific and Practical Medical Center of Urology) with the support of Ethicon Endo Surgery (Johnson&Johnson) and FE LLC "Medical Online Services"...',
                "status" => 1,
                "date" => $date,
                "attachment_id" => 3,
            ]
        ],['id']);
    }
}
