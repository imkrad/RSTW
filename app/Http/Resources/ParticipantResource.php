<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->lastname.', '.$this->firstname.' '.$this->middlename[0].'.',
            'address' => $this->barangay->name.', '.$this->municipality->name.', '.$this->province->name.', '.$this->region->region,
            'email' => $this->email,
            'contact_no' => $this->contact_no,
            'affiliation' => $this->affiliation,
            'prc_no' => $this->prc_no,
            'events' => $this->events,
            'created_at' => $this->created_at
        ];
    }
}
