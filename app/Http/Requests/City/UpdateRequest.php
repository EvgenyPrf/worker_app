<?php

namespace App\Http\Requests\City;

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
            'title' => 'required|string',
            'population' => 'required|integer',
            'yardage' => 'required|integer',
            'is_capital' => 'nullable|string',
            'history' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательное',
            'title.string' => 'Введите текст',
            'population.required' => 'Это поле обязательное',
            'population.integer' => 'Введите число',
            'yardage.required' => 'Это поле обязательное',
            'yardage.integer' => 'Введите число',
            'history.string' => 'Введите текст',
        ];
    }
}
