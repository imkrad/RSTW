<?php

namespace App\Http\Resources;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Conversation2Resource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);
        if(\Auth::user()->id == $this->second_id){
            $name = $this->second->profile->firstname.' '.$this->second->profile->lastname;
            $avatar = $this->second->profile->avatar;
            $user_id = $hashids->encode($this->second->id);
        }else{
            $name = $this->first->profile->firstname.' '.$this->first->profile->lastname;
            $avatar = $this->first->profile->avatar;
            $user_id = $hashids->encode($this->first->id);
        }

        if(count($this->messages) > 0){
            $message = $this->messages[0]->message;
            $created = $this->messages[0]->created_at;
            $is_read = $this->messages[0]->is_read;
        }else{
            $message = 'Send new message';
            $created = $this->created_at;
            $is_read = $this->is_read;
        }

        return [
            'id' => $code,
            'user_id' => $user_id,
            'name' => $name,
            'avatar' => $avatar,
            'has_convo' => true,
            'message' => $message,
            'created' => $created,
            'is_read' => $is_read
        ];
    }
}
