<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|email',
            'first_tel' => 'required|max:5',
            'middle_tel' =>'required|max:5',
            'last_tel' =>'required|max:5',
            'address' =>'required',
            'category_id' =>'required',
            'content' =>'required|max:120'
        ];
    }
    
     public function messages()
     {
         return [
                'first_name.required' => '名を入力してください',
                'last_name.required' => '姓を入力してください',
                'gender.required' => '性別を入力してください',
                'email.required' => 'メールアドレスを入力してください',
                'first_tel.required' => '電話番号を入力してください',
                'middle_tel.required' => '電話番号を入力してください',
                'last_tel.required' => '電話番号を入力してください',
                'address.required' => '住所を入力してください',
                'category_id.required' => 'お問い合わせの種類を入力してください',
                'content.required' => 'お問い合わせの内容を入力してください',

                'first_tel.max' => '電話番号は5桁までの数字で入力してください',
                'middle_tel.max' => '電話番号は5桁までの数字で入力してください',
                'last_tel.max' => '電話番号は5桁までの数字で入力してください',

                'content.max' => 'お問合せ内容は120文字以内で入力してください',
         ];
     }

}
