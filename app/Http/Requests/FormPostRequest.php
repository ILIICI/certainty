<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPostRequest extends FormRequest
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
            'name' => 'required|min:4',
            'surname' => 'required|min:6',
            'address' => 'required|min:10',
            'description' =>'required|min:10',
            'fileupload.*' => 'required|max:5000|mimes:jpg,png,png,gif',
        ];
    }
}
