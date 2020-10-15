<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:20'
        ];
    }

    /**
     * Get the error messages
     */
    public function messages()
    {
        return[
            
            'name.required'        => 'The :attribute is required',
            'name.min'             => 'The :attribute has to be more than 3 characters',
            'name.max'             => 'The :attribute has to be 20 characters maximum'
        ];
    }

    /**
     * In case we use alias
     */
    public function attributes()
    {
        return [
            'name' => 'category name',
        ];
    }
}
