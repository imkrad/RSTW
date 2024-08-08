<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestserviceMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'laboratory_type','method_id','reference_id','fee','is_active'
    ];

    public function method()
    {
        return $this->belongsTo('App\Models\TestserviceName', 'method_id', 'id');
    }

    public function reference()
    {
        return $this->belongsTo('App\Models\TestserviceName', 'reference_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_type', 'id');
    }

    public function setFeeAttribute($value)
    {
        $this->attributes['fee'] = trim(str_replace(',','',$value),'₱');
    }

    public function getFeeAttribute($value)
    {
        return '₱'.$value;
    }
}
