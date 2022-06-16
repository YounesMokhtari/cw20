<?php

namespace App\Http\Requests;

use App\Rules\IranPhoneCheck;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Form extends FormRequest
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
        return [
            "firstName" => 'required|min:2|max:8',
            "lastName" => 'required|min:2|max:8',
            "email" => 'required|email',
            "phoneNumber" => [new IranPhoneCheck, 'required'],
            "brithDay" => 'required|date',
            "gender" => ['required', Rule::in(['male', 'female'])],

        ];
    }
}
