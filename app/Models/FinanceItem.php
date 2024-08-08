<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'name'
    ];

    public function itemable()
    {
        return $this->morphOne('App\Models\FinanceOpItem', 'itemable');
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
