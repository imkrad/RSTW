<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function list()
    {
        return $this->hasMany('App\Models\EventList', 'event_id');
    }

    public function participants()
    {
        return $this->hasMany('App\Models\ParticipantEvent', 'event_id');
    }
}
