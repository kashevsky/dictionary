<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name'=>'',
            'phone_number'=>'digits_between:9,9',
            'birth'=>'',
            'delivery_id'=>''
        ];
    }
    public function messages()
    {
        return [
            'digits_between'=>'Поле должно содержать 9 символов',
            // 'min'=>'Поле должно иметь минимум символов :min символов',
            // 'max'=>'Поле должно содержать не более :max символов'
        ];        
    }
}
