<?php

namespace App\Http\Requests\Animal;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'is_predator' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
