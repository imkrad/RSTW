<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceOrseries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start',
        'end',
        'next',
        'user_id',
        'is_active',
        'laboratory_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
