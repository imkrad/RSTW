<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'amount',
        'balance',
        'is_credit',
        'wallet_id'
    ];

    public function transacable()
    {
        return $this->morphTo();
    }

    public function wallet()
    {
        return $this->belongsTo('App\Models\Wallet', 'wallet_id', 'id');
    }

    public function receipt()
    {
        return $this->belongsTo('App\Models\FinanceReceipt', 'receipt_id', 'id');
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
