<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        if($this->method()=="PUT")
        {
            $name='required';
            $password = 'required';
            $email ='required' ;
            $national_id = 'required';
            $avatar_img ='required' ;
        }
        else
        {
            $name='required';
            $password = 'required';
            $email ='required' ;
            $national_id = 'required';
            $avatar_img ='required' ;
        }
        return [
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'national_id' => $national_id,
            'avatar_img' => $avatar_img,
        ];
    }
}
