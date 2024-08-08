<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WithdrawalsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'quantity' => $this->quantity,
            'created_at' => $this->detail->withdrawal_datetime
        ];
    }
}
