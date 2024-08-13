<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id'
    ];

    public function event()
    {
        return $this->belongsTo('App\Models\Event', 'event_id', 'id');
    }

    public function participant()
    {
        return $this->belongsTo('App\Models\Participant', 'participant_id', 'id');
    }
}
