<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhoWeAreRequest extends FormRequest
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
            'description' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.max' => 'Заголовок не должен превышать 50 символов!',
            'description.max' => 'Описание не должно превышать 255 символов!',
        ];
    }
}
