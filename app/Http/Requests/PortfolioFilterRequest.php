<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioFilterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'sort' => 'required|integer',
            'filter_name' => 'required|max:20',
        ];
    }
    public function messages()
    {
        return [
            'sort.required' => 'Поле сортировка обязательно для заполнения!',
            'filter_name.required' => 'Поле заголовок обязателен к заполнению',
            'filter_name.max' => 'Поле заголовок не может быть более 20 символов',
        ];
    }
}
