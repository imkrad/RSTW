<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'op_id',
        'orseries_id',
        'deposit_id',
        'payor_id',
        'created_by',
        'laboratory_id',
        'is_deposited'
    ];

    public function wallet()
    {
        return $this->hasMany('App\Models\WalletTransaction', 'receipt_id');
    }

    public function detail()
    {
        return $this->hasOne('App\Models\FinanceReceiptDetail', 'receipt_id');
    }

    public function deposit()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'deposit_id', 'id');
    }

    public function op()
    {
        return $this->belongsTo('App\Models\FinanceOp', 'op_id', 'id');
    }

    public function payor()
    {
        return $this->belongsTo('App\Models\Customer', 'payor_id', 'id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }

    public function transaction()
    {
        return $this->morphOne('App\Models\WalletTransaction', 'transacable');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y', strtotime($value));
    }
}
