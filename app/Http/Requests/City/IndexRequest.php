<?php

namespace App\Http\Requests\City;

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
            'title' => 'nullable|string',
            'population_from' => 'nullable|integer',
            'population_to' => 'nullable|integer',
            'yardage_from' => 'nullable|integer',
            'yardage_to' => 'nullable|integer',
            'is_capital' => 'nullable|string',
            'history' => 'nullable|string',
        ];
    }
}
