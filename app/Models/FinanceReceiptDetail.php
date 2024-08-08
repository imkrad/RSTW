<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceReceiptDetail extends Model
{
    use HasFactory;

    public function receipt()
    {
        return $this->belongsTo('App\Models\FinanceReceipt', 'receipt_id', 'id');
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = trim(str_replace(',','',$value),'₱');
    }

    public function getAmountAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }
}
