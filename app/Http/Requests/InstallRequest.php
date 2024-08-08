<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstallRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'acronym' => 'required',
            'samplecode_year' => 'required',
            'laboratory_id' => 'required',
            'laboratories' => 'required|array|min:1',
            // 'laboratories.*' => 'required|integer|distinct|min:1'
            'laboratories.*.value' => 'required|integer',
            'laboratories.*.tsr_count' => 'required|integer',
            'laboratories.*.sample_count' => 'required|integer',
            'laboratories.*.report_count' => 'required|integer',
        ];
    }
}
