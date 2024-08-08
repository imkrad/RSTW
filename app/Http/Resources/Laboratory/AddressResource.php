<?php

namespace App\Http\Resources\Laboratory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $address = ($this->address) ? $this->address.', ' : '';
        return [
            'name' => $address.$this->municipality->name.', '.$this->province->name.', '.$this->region->region,
            'address' => $this->address,
            'region' => $this->region,
            'province' => $this->province,
            'municipality' => $this->municipality,
            'barangay' => $this->barangay,
        ];
    }
}
