<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'laboratory_id', 
        'laboratory_type',
        'role_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\ListRole', 'role_id', 'id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_type', 'id');
    }
}
