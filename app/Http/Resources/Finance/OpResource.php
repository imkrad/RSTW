<?php

namespace App\Http\Resources\Finance;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OpResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'code' => $this->code,
            'total' => $this->total,
            'or' => $this->or,
            'items' => $this->items,
            'customer_id' => $this->customer->id,
            'customer' => ($this->customer->name != 'Main') ? $this->customer->customer_name->name.' - '.$this->customer->name : $this->customer->customer_name->name,
            'address' => $this->customer->address->barangay->name.' '.$this->customer->address->municipality->name.' '.$this->customer->address->province->name.' '.$this->customer->address->region->region,
            'payment' => $this->payment,
            'collection' => $this->collection->name,
            'status' => $this->status,
            'user' => $this->createdby->profile->firstname.' '.$this->createdby->profile->lastname,
            'date' => date('F d, Y', strtotime($this->created_at))
        ];
    }
}
