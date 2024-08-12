<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 
        'lastname', 
        'middlename',
        'age',
        'sex',
        'contact_no',
        'email',
        'affiliation',
        'prc_no',
        'barangay_code',
        'municipality_code',
        'province_code',
        'region_code'
    ];

    public function events()
    {
        return $this->hasMany('App\Models\ParticipantEvent', 'participant_id');
    }
}
