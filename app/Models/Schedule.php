<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'venue',
        'description',
        'is_allday',
        'start',
        'end',
        'event_id',
        'laboratory_id',
        'user_id'
    ];
    
    public function event()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'event_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
