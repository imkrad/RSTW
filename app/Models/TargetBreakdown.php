<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetBreakdown extends Model
{
    use HasFactory;

    protected $fillable = ['name','count','is_consolidated','is_amount','laboratory_type','target_id'];

    public function type()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_type', 'id');
    }

    public function target()
    {
        return $this->belongsTo('App\Models\Target', 'target_id', 'id');
    }
}
