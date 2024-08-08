<?php

namespace App\Http\Requests;

use App\Rules\NotZeroPeso;
use Illuminate\Foundation\Http\FormRequest;

class TargetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'items.*.name' => 'required',
            'items.*.count' => ['required',new NotZeroPeso],
        ];
    }
}
