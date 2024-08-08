<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryWithdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'stock_id',
        'user_id'
    ];

    public function stock()
    {
        return $this->belongsTo('App\Models\InventoryStock', 'stock_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
