<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
            'title' => 'required|max:50',
            'slogan' => 'required|max:50',
            'description' => 'required|max:255',
            'image' => 'image|dimensions:min_width=460,max_width=920,min_height=360,max_height=720',
        ];
    }
    public function messages()
    {
        return [
            'title.max' => 'Максимальная длина заголовка не должна превышать 50 символов!',
            'slogan.max' => 'Максимальная длина подзаголовка не должна превышать 50 символов!',
            'description.max' => 'Максимальная длина описания не должна превышать 255 символов!',
            'image.dimensions' => 'Размеры изображения не соответствуют требуемым!'
        ];
    }
}
