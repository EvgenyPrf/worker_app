<?php

namespace App\Http\Requests\Worker;

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
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'age' => 'nullable|integer',
            'email' => 'nullable|string',
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Поле должно содержать текст',
            'name.required' => 'Заполните данное поле',
            'surname.string' => 'Поле должно содержать текст',
            'surname.required' => 'Заполните данное поле',
            'age.required' => 'Заполните данное поле',
            'age.integer' => 'Поле должно содержать число',
            'email.string' => 'Поле должно содержать текст',
            'email.required' => 'Заполните данное поле',
        ];
    }
}
