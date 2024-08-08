<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $fillable = ['year','data','is_completed','laboratory_id'];

    public function breakdowns()
    {
        return $this->hasMany('App\Models\TargetBreakdown', 'target_id');
    }
}
