<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [ 'required', 'min:1', 'max:255'],
            'email' => 'required|email|min:3|max:255',
            'tel' => 'required|min:5|max:255',
        ];

        if (!empty($this->user)) {
            $rules['name'][] = Rule::unique('users')->ignore($this->user->id);
        } else {
            $rules['name'][] = Rule::unique('users');
        }

        return $rules;
    }
}
