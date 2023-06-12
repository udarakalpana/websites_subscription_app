<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class PostsStoreRequest extends FormRequest
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
        return [
            'post' => 'required|array',
            'post.*.user_id' => 'required|integer',
            'post.*.website_id' => 'required|integer',
            'post.*.post_title' => 'required|string',
            'post.*.post_body' => 'required|string',
        ];
    }
}
