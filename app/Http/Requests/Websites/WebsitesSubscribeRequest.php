<?php

namespace App\Http\Requests\Websites;

use Illuminate\Foundation\Http\FormRequest;

class WebsitesSubscribeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'subscribe' => 'required|array',
            'subscribe.*.user_id' => 'required|integer',
            'subscribe.*.website_id' => 'required|integer',
            'subscribe.*.website_name' => 'required|string',
        ];

        return $rules;
    }
}
