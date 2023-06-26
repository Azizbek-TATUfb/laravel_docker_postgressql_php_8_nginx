<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateRequest extends FormRequest
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
            "attachment_id" => "nullable",

            "status" => "nullable",
            "attachment_id_old" => "nullable",

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
