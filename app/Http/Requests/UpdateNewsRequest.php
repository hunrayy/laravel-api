<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            "job_title" => "required|string|max:225",
            "job_decription" => "required|string|max:225",
            "job_location" => "required|string|max:225",

        ];
    }
}
