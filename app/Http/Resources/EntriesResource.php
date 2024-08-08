<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EntriesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'expired_at' => $this->expiration_date,
            'number' => $this->po_number,
            'onhand' => $this->quantity_onhand,
            'quantity' => $this->quantity,
            'unit' => $this->content,
            'price' => ($this->amount == '' || !$this->amount) ? null : (float)$this->amount,
            'withdrawals' => WithdrawalsResource::collection($this->withdrawals),
            'supplier' => $this->supplier->suppliers,
            'created_at' => $this->created_at
        ];
    }
}
