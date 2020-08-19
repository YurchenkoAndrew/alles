<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhoWeAreItemRequest extends FormRequest
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
            'image' => 'image|dimensions:min_width=400,max_width=400,min_height=400,max_height=400',
            'name' => 'required|max:30',
            'description' => 'required|max:255',
            'profession' => 'required|max:30',
            'facebook' => 'max:255',
            'instagram' => 'max:255',
            'vkontakte' => 'max:255',
        ];
    }
    public function messages()
    {
        return [
            'image.image' => 'Файл должен быть изображением!',
            'image.dimensions' => 'Изображение должно быть 400px по ширине и 400px в высоту!',
            'name.required' => 'Поле имя обязательно к заполнению!',
            'name.max' => 'Поле имя не должно превышать 30 символов!',
            'description.required' => 'Поле описание обязательно к заполнению!',
            'description.max' => 'Поле описание не должно превышать 255 символов!',
            'profession.required' => 'Поле специальность обязательно к заполнению!',
            'profession.max' => 'Поле специальность не должно превышать 30 символов!',
            'facebook.max' => 'Поле описание не должно превышать 255 символов!',
            'instagram.max' => 'Поле описание не должно превышать 255 символов!',
            'vkontakte.max' => 'Поле описание не должно превышать 255 символов!',
        ];
    }
}
