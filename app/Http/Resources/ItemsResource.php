<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $units = $this->unit;
        switch($units){
            case 1:
                $unit = 123;
            break;
            case 2:
                $unit = 124;
            break;
            case 3:
                $unit = 125;
            break;
            case 4:
                $unit = 126;
            break;
            case 5: 
                $unit = 122;
            break;
        }
        return [
            'code' => $this->product_code,
            'name' => $this->product_name,
            'unit_id' => $unit,
            'entries' => EntriesResource::collection($this->entries)
        ];
    }
}
