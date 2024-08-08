<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'sender_id',
        'is_reply',
        'is_group',
        'is_read'
    ];

    public function receivable()
    {
        return $this->morphTo();
    }

    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
