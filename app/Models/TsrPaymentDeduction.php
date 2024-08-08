<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TsrPaymentDeduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'code',
        'user_id',
        'payment_id',
        'wallet_id'
    ];

    public function setAvailableAttribute($value)
    {
        $this->attributes['amount'] = trim(str_replace(',','',$value),'₱');
    }

    public function getAmountAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\TsrPayment', 'payment_id', 'id');
    }

    public function wallet()
    {
        return $this->belongsTo('App\Models\Wallet', 'wallet_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
