<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBlock extends FormRequest
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
            'title' => 'required|max:15',
            'published' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле "Название" обязательно к заполнению',
            'title.max' => 'Максимальная длина Названия не должна превышать 15 символов',
            'published' => 'Поле "Публикация" обязательно к заполнению',
        ];
    }
}
