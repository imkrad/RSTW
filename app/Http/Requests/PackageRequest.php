<?php

namespace App\Http\Requests;

use App\Rules\NotZeroPeso;
use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required',
            'fee' => ['required', new NotZeroPeso],
            'sampletype_id' => 'sometimes|required|integer',
            'laboratory_type' => 'sometimes|required|integer',
            'lists' => 'required|array|min:1',
            'lists.*' => 'required|integer|distinct|min:1'
        ];
    }
}
