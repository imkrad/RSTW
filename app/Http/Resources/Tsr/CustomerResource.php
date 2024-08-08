<?php

namespace App\Http\Resources\Tsr;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => ($this->customer_name->has_branches) ? ($this->is_main) ? $this->customer_name->name :  $this->customer_name->name.' - '.$this->name : $this->customer_name->name,
        ];
    }
}
