<?php

namespace App\Http\Resources\Laboratory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SampleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'customer_description' => $this->customer_description,
            'description' => $this->description,
            'is_disposed' => $this->is_disposed,
            'analyses' => AnalysisResource::collection($this->analyses),
            'report' => $this->report,
            'selected' => false
        ];
    }
}
