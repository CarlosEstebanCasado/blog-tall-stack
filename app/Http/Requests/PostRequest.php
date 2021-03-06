<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3|max:50'
        ];
    }

    /**
     * Get the error messages
     */
    public function messages()
    {
        return[
            
            'title.required'        => 'The :attribute is required',
            'title.min'             => 'The :attribute has to be more than 3 characters',
            'title.max'             => 'The :attribute has to be 50 characters maximum'
        ];
    }
}
