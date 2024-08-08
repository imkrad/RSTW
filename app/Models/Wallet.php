<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'total', 
        'available',
        'deduction',
        'customer_id'
    ];

    public function transactions()
    {
        return $this->hasMany('App\Models\WalletTransaction', 'wallet_id')->orderBy('created_at','DESC');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function setAvailableAttribute($value)
    {
        $this->attributes['available'] = trim(str_replace(',','',$value),'₱');
    }

    public function getAvailableAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
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
