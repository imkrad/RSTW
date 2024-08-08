<?php

namespace App\Http\Resources\Inventory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'code' => $this->code,
            'brand' => $this->brand,
            'model' => $this->model,
            'serial_no' => $this->serial_no,
            'year' => $this->year,
            'price' => $this->price,
            'is_operational' => $this->is_operational,
            'supplier' => $this->supplier->name,
            'laboratory' => $this->type->name
        ];
    }
}
