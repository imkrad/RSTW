<?php

namespace App\Http\Resources;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChatboxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->receivable_id);

        return [
            'message' => $this->message,
            'sender_id' => $this->sender_id,
            'name' => $this->sender->profile->firstname.' '.$this->sender->profile->lastname,
            'avatar' => $this->sender->profile->avatar,
            'receiver_id' =>  $code,
            'time' => $this->created_at
        ];
    }
}
