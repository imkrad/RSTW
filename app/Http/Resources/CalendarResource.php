<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CalendarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user = strtoupper(preg_replace('/\d+/', '', $this->user->username));
        return [
            'id' => $this->id,
            'title' => $this->title.' ('.$user.')',
            'start' => $this->start,
            'end' => $this->end,
            'className' => $this->event->others.' '.$this->event->color,
            'start_date' => date("M d, Y g:i a",strtotime($this->start)),
            'end_date' => date("M d, Y g:i a",strtotime($this->start)),
        ];
    }
}
