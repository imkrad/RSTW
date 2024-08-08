<?php

namespace App\Http\Resources\Tsr;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'customer' => new CustomerResource($this->customer),
            'payment' => new PaymentResource($this->payment),
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'due_at' => $this->due_at,
            'selected' => false
        ];
    }
}
