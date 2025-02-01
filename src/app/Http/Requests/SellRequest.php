<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class SellRequest extends FormRequest
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
            'img_path' => ['required','file','mimes:png,jpg,jpeg'],
            'sell_category' => ['required'],
            'sell_condition' => ['required'],
            'sell_name' => ['required','max:255','unique:products,name'],
            'sell_content' => ['required','max:255'],
            'sell_price' => ['required','integer','min:1'],
        ];
    }

    public function messages()
    {
        return [
            'img_path.required' => 'ファイルを選択してください',
            'img_path.mimes' => '.png/.jpg/.jpegファイルを選択してください',
            'sell_category.required' => 'カテゴリーを1つ以上選択してください',
            'sell_condition.required' => '商品の状態を選択してください',
            'sell_name.required' => '商品名を入力してください',
            'sell_name.max' => '255文字以内で入力してください',
            'sell_name.unique' => 'この商品名は既に使われています',
            'sell_content.required' => '商品の説明を入力してください',
            'sell_content.max' => '255文字以内で入力してください',
            'sell_price.required' => '販売価格を入力してください',
            'sell_price.integer' => '整数で入力してください',
            'sell_price.min' => '¥1以上で入力してください',
        ];
    }
}