<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class FocusRequest extends FormRequest
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
            'focus_id' => 'required|integer|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'focus_id.required' => '关注人id必传',
        ];
    }
}
