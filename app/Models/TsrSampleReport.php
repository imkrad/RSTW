<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TsrSampleReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'information',
        'sample_id',
        'user_id'
    ];

    public function sample()
    {
        return $this->belongsTo('App\Models\TsrSample', 'sample_id', 'id');
    }
}
