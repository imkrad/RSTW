<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EulimsWithdrawal extends Model
{
    use HasFactory;

    protected $table = 'tbl_inventory_withdrawaldetails';
    protected $primaryKey = 'inventory_withdrawaldetails_id';

    public function detail()
    {
        return $this->belongsTo('App\Models\EulimsDetail', 'inventory_withdrawal_id', 'inventory_withdrawal_id');
    }
    
}
