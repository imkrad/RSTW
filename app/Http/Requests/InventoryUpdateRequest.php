<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if($this->option == 'item'){
            return [
                'category_id' => 'required',
                'reorder' => 'required|integer|min:1',
            ];
        }else if($this->option == 'supplier'){
            return [];
        }else{
            return [];
        }
    }
}
