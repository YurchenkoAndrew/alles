<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentTitleRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле заголовок обязательно к заполнению!',
            'title.max' => 'Заголовок не должен превышать 50 символов!',
            'description.required' => 'Поле описание обязательно к заполнению!',
            'description.max' => 'Поле описание не должно превышать 255 символов!',
        ];
    }
}
