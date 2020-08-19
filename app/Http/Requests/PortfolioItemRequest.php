<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioItemRequest extends FormRequest
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
            'portfolio_id' => 'required|integer',
            'sort' => 'required|integer',
            'image' => 'image|dimensions:min_width=640,max_width=640,min_height=400,max_height=400',
            'title' => 'required|max:30',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'image.image' => 'Файл должен быть изображением!',
            'image.dimensions' => 'Изображение должно быть 640px по ширине и 400px в высоту!',
            'title.required' => 'Поле заголовок обязательно к заполнению!',
            'title.max' => 'Поле заголовок не должно превышать 30 символов!'
        ];
    }
}
