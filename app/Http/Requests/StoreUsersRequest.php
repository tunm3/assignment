<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
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
            'inum' => 'required|min:10',
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'inum.min' => 'Must be 10 character',
            'firstName.required' => 'Required',
            'lastName.required' => 'Required',
            'phone.required' => 'Required'
        ];
    }
}
