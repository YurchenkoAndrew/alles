<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name' => 'required|max:50',
            'customer' => 'required|max:50',
            'image' => 'image|dimensions:min_width=200,max_width=200,min_height=200,max_height=200',
            'description' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'sort.required' => 'Поле соритировка обязательно к заполнению!',
            'name.required' => 'Поле имя обязательно к заполнению!',
            'name.max' => 'Имя не должно превышать 50 символов',
            'customer.required' => 'Поле отношений обязательно к заполнению!',
            'customer.max' => 'Отношение не должно превышать 50 символов',
            'image.image' => 'Файл должен быть изображением!',
            'image.dimensions' => 'Изображение должно быть 200px по ширине и 200px в высоту!',
            'description.required' => 'Поле комментарий обязательно к заполнению!',
            'description.max' => 'Комментарий не должно превышать 255 символов',
        ];
    }
}
