<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TsrPayment extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = [
        'discount_id',
        'total',
        'subtotal',
        'discount',
        'or_number',
        'payment_id',
        'collection_id',
        'status_id',
        'paid_at',
        'is_paid',
        'is_free',
        'has_deduction'
    ];

    public function tsr()
    {
        return $this->belongsTo('App\Models\Tsr', 'tsr_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'payment_id', 'id');
    }

    public function collection()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'collection_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function discounted()
    {
        return $this->belongsTo('App\Models\ListDiscount', 'discount_id', 'id');
    }

    public function deduction()
    {
        return $this->hasOne('App\Models\TsrPaymentDeduction', 'payment_id');
    }

    public function setSubtotalAttribute($value)
    {
        $this->attributes['subtotal'] = trim(str_replace(',','',$value),'₱');
    }

    public function getSubtotalAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }

    public function setTotalAttribute($value)
    {
        $this->attributes['total'] = trim(str_replace(',','',$value),'₱');
    }

    public function getTotalAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }

    public function getDiscountAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }

    public function setDiscountAttribute($value)
    {
        $this->attributes['discount'] = trim(str_replace(',','',$value),'₱');
    }

    public function getPaidAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
