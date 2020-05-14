<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientItemRequest extends FormRequest
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
            'image' => 'image|dimensions:min_width=400,max_width=400,min_height=200,max_height=200',
            'sort' => 'required|integer',
            'link' => 'max:255'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле заголовок обязательно к заполнению!',
            'title.max' => 'Поле заголовок не должно превышать 50 символов!',
            'image.image' => 'Файл должен быть изображением!',
            'image.dimensions' => 'Изображение должно быть 400px по ширине и 200px в высоту!',
            'link.max' => 'Поле ссылка не должно превышать 255 символов!',
        ];
    }
}
