<?php

namespace App\Http\Requests\Animal;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => 'nullable|integer',
            'nickname' => 'nullable|string',
            'title' => 'nullable|string',
            'sex' => 'nullable|string',
            'age_from' => 'nullable|integer',
            'age_to' => 'nullable|integer',
            'is_predator' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'age_from.integer' => 'введите число',
            'age_to.integer' => 'введите число',
        ];
    }
}
