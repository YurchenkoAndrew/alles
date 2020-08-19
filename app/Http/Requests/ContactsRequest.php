<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'description' => 'max:255',
            'address' => 'required|max:100',
            'email' => 'email|max:50',
            'phone_one' => 'required|max:16',
            'phone_two' => 'max:16',
            'facebook' => 'max:100',
            'instagram' => 'max:100',
            'vkontakte' => 'max:100',
            'odnoklassniki' => 'max:100',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле заголовок обязательно к заполнению!',
            'title.max' => 'Заголовок не может превышать 50 символов!',
            'description.max' => 'Описание не может превышать 255 символов!',
            'address.required' => 'Поле адрес, обязательно к заполнению!',
            'address.max' => 'Адрес не может превышать 100 символов!',
            'email.email' => 'Введите корректный Email',
            'email.max' => 'Email не должен превышать 50 символов!',
            'phone_one.required' => 'Поле "телефон" обязательно к заполнению!',
            'phone_one.max' => 'Телефон не может превышать 16 символов!',
            'phone_two.max' => 'Телефон не может превышать 16 символов!',
            'facebook.max' => 'Ссылка на Facebook не может превышать 100 символов!',
            'instagram.max' => 'Ссылка на Instagram не может превышать 100 символов!',
            'vkontakte.max' => 'Ссылка на Вконтакте не может превышать 100 символов!',
            'odnoklassniki.max' => 'Ссылка на Одноклассники не может превышать 100 символов!',
        ];
    }
}
