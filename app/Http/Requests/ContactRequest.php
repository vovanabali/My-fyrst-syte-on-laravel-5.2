<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Что делать если не прошло. Если True то пропускает, если false то не пропускает.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'max:5|required'
        ];
    }

    public function messages()
    {
        /*
         * Если указать перед свойством валидации имя поля +. то данное сообщение будет использываться только для данного поля и игнорировать сообщения из файла валидвации
         * а он будет игнироровать все.
         */
        return [
            'name.required' => '|Поле| :attribute обязательно к заполнению',
        ];
    }
}
