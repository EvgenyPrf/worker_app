<?php

namespace App\Http\Requests\Animal;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nickname' => 'nullable|string',
            'title' => 'required|string',
            'sex' => 'required|string',
            'age' => 'required|integer',
            'growth' => 'required|integer',
            'is_predator' => 'nullable|string',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nickname.string' => 'Поле должно содержать текст',
            'title.required' => 'Заполните данное поле',
            'title.string' => 'Поле должно содержать текст',
            'sex.required' => 'Заполните данное поле',
            'sex.string' => 'Поле должно содержать текст',
            'age.required' => 'Заполните данное поле',
            'age.integer' => 'Поле должно содержать число',
            'growth.required' => 'Заполните данное поле',
            'growth.integer' => 'Поле должно содержать число',
            'description.string' => 'Поле должно содержать текст',
            'description.required' => 'Заполните данное поле',
        ];
    }
}
