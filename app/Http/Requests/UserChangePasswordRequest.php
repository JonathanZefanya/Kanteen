<?php

namespace App\Http\Requests;

use App\Http\Requests\CurrentPassword;
use Illuminate\Foundation\Http\FormRequest;

class UserChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'password'              => 'required|string|min:6',
            'password_confirmation' => 'required|string|min:6',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->password !== $this->password_confirmation) {
                $validator->errors()->add('password_confirmation', 'The password confirmation does not match.');
            }
        });
    }
}