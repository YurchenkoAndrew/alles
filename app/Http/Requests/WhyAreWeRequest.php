<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhyAreWeRequest extends FormRequest
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
            'slogan' => 'required|max:255',
            'image_service_1' => 'image|dimensions:min_width=200,max_width=360,min_height=200,max_height=360',
            'title_service_1' => 'required|max:30',
            'description_service_1' => 'required|max:255',
            'image_service_2' => 'image|dimensions:min_width=200,max_width=360,min_height=200,max_height=360',
            'title_service_2' => 'required|max:30',
            'description_service_2' => 'required|max:255',
            'image_service_3' => 'image|dimensions:min_width=200,max_width=360,min_height=200,max_height=360',
            'title_service_3' => 'required|max:30',
            'description_service_3' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.max' => 'Максимальная длина заголовка не должна превышать 50 символов!',
            'slogan.max' => 'Максимальная длина подзаголовка не должна превышать 255 символов!',
            'image_service_1.dimensions' => 'Размеры изображения не соответствуют требуемым!',
            'title_service_1.max' => 'Максимальная длина заголовка не должна превышать 30 символов!',
            'description_service_1.max' => 'Максимальная длина описания не должна превышать 255 символов!',
            'image_service_2.dimensions' => 'Размеры изображения не соответствуют требуемым!',
            'title_service_2.max' => 'Максимальная длина заголовка не должна превышать 30 символов!',
            'description_service_2.max' => 'Максимальная длина описания не должна превышать 255 символов!',
            'image_service_3.dimensions' => 'Размеры изображения не соответствуют требуемым!',
            'title_service_3.max' => 'Максимальная длина заголовка не должна превышать 30 символов!',
            'description_service_3.max' => 'Максимальная длина описания не должна превышать 255 символов!',
        ];
    }
}
