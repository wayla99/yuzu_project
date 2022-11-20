<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsFormRequest extends FormRequest
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
        $rules = [
            'location' => [
                'nullable'
            ],
            'ads_type' => [
                'required',
            ],
            'file' => [
                'nullable',
            ],
            'status' => [
                'nullable'
            ],
        ];

        return $rules;
    }
}
