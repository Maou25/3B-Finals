<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'bail|required|string|max:255',      //Stop at  Validation when
            'lastname'  => 'bail|required|string|max:255',      //  this two failed
            'birthdate' => 'required|date',
            'sex'       => 'required|in:MALE,FEMALE',
            'address'   => 'required|string',
            'year'      => 'required|integer|min:1|max:4',
            'course'    => 'required|in:BSCS,BSIT',
            'section'   => 'required|in:A,B,C,D',
        ];
    }
    public function messages()
    {
        return [
            'firstname' => 'First Name MO!',
            'lastname'  => 'Last Name MO!',
            'birthdate' => 'YUNG TAMANG DATE FORMAT!',
            'sex'       => 'Select: LALAKE or CHEEKS',
            'address'   => 'ADDRESS MO BOY!',
            'year'      => 'Select: 1st, 2nd, 3rd, 4th',
            'course'    => 'Select: IT ka O Tambay?',
            'section'   => 'Select: A, B, C, D',
        ];
    }
}