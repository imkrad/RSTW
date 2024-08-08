<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceDeposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'start','end','total','deposit_id','orseries_id','created_by','laboratory_id','date'
    ];

    public function deposit()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'deposit_id', 'id');
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
