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
            'img_path' => ['file','mimes:png,jpg,jpeg'],
            'name' => ['required','max:255'],
            'postalcode' => ['required','regex:/^[0-9-]+$/','size:8'],
            'address' => ['required','max:255'],
        ];
    }

    public function messages()
    {
        return [
            'img_path.mimes' => '.png/.jpg/.jpegファイルを選択してください',
            'name.required' => 'お名前を入力してください',
            'postalcode.required' => '郵便番号を入力してください',
            'postalcode.regex' => '7桁の数字（ハイフンあり）で入力してください',
            'postalcode.size' => '7桁の数字（ハイフンあり）で入力してください',
            'address.required' => '住所を入力してください',
        ];
    }
}