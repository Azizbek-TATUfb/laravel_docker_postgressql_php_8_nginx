<?php

namespace App\Http\Requests\References;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "references_type_id" => "nullable",
            "name" => "nullable",

            "slug_uz" => "nullable",
            "slug_ru" => "nullable",
            "slug_en" => "nullable",

            "title_uz" => "nullable",
            "title_ru" => "nullable",
            "title_en" => "nullable",

            "excerpt_uz" => "nullable",
            "excerpt_ru" => "nullable",
            "excerpt_en" => "nullable",

            "content_uz" => "nullable",
            "content_ru" => "nullable",
            "content_en" => "nullable",

            "views_count" => "nullable",
//            "photo" => "nullable|mimes:png,jpg,jpeg|max:2048",

            "status" => "nullable",

            "has_uz" => "nullable",
            "has_ru" => "nullable",
            "has_en" => "nullable",

            "date" => "nullable",
            "meta" => "nullable",
            "created_by" => "nullable",
            "updated_by" => "nullable",
        ];
    }

}
