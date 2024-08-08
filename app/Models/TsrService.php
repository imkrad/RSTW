<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TsrService extends Model
{
    use HasFactory;

    protected $fillable = [
        'fee',
        'total',
        'quantity',
        'service_id',
        'is_additional'
    ];

    public function typeable()
    {
        return $this->morphTo();
    }
    
    public function service()
    {
        return $this->belongsTo('App\Models\ListService', 'service_id', 'id');
    }

    public function setFeeAttribute($value)
    {
        $this->attributes['fee'] = trim(str_replace(',','',$value),'₱');
    }

    public function getFeeAttribute($value)
    {
        return '₱'.$value;
    }

    public function setTotalAttribute($value)
    {
        $this->attributes['total'] = trim(str_replace(',','',$value),'₱');
    }

    public function getTotalAttribute($value)
    {
        return '₱'.$value;
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
