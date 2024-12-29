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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'postalcode' => 'required|integer|digits:7',
            'address' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'postalcode.required' => '郵便番号を入力してください',
            'postalcode.integer' => '数字で入力してください',
            'postalcode.digits' => '7桁の数字で入力してください',
            'address.required' => '住所を入力してください',
        ];
    }
}