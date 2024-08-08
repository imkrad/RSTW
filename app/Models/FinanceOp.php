<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceOp extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'code',
        'total',
        'status_id',
        'collection_id',
        'payment_id',
        'customer_id',
        'created_by',
        'laboratory_id'
    ];

    public function items()
    {
        return $this->hasMany('App\Models\FinanceOpItem', 'op_id');
    }

    public function or()
    {
        return $this->hasOne('App\Models\FinanceReceipt', 'op_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function createdby()
    {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function collection()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'collection_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'payment_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function setTotalAttribute($value)
    {
        $this->attributes['total'] = trim(str_replace(',','',$value),'₱');
    }

    public function getTotalAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }
}
