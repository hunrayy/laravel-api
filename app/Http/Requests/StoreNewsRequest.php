<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "firstname" => "required|string|max:225",
            "lastname" => "required|string|max:225",
            "email" => "required|string|max:225",
            "phone" => "required|string|max:225",
            "news_title" => "required|string|max:225",
            "news_description" => "required|string|max:225",
            "news_location" => "required|string|max:225",
        ];
    }
}
