<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAd extends FormRequest
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
            'title'       => ['required','string'],
            'description' => ['required','string'],
            'category'    => ['nullable','string'],
            'sex'         => ['nullable','string'],
            'images'      => 'nullable',
            'images.*'    => 'mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
