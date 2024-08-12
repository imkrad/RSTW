<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:150|unique:participants,email,'.$this->id,
            'contact_no' => 'required|numeric|digits:11|unique:participants,contact_no,'.$this->id,
            'prc_no' => 'nullable|string|max:255',
            'affiliation' => 'nullable|string|max:255',
            'sex' => 'required',
            'age' => 'required',
            'province_code' => 'required',
            'municipality_code' => 'required',
            'barangay_code' => 'required',
            'region_code' => 'required',
            'address' => 'required',
            'lists' => 'required|array|min:1',
            'lists.*' => 'required|integer|distinct|min:1'
        ];
    }

    public function messages()
    {
       
        $message = [
            'sex.required' => '*',
            'age.required' => '*',
            'email.required' => '*',
            'contact_no.required' => '*',
            'barangay_code.required' => '*',
            'municipality_code.required' => '*',
            'province_code.required' => '*',
            'region_code.required' => '*',
            'address.required' => '*',
        ];
       
        return $message;
    }
}
