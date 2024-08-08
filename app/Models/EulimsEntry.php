<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EulimsEntry extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_inventory_entries';
    protected $primaryKey = 'inventory_transactions_id';

    public function withdrawals()
    {
        return $this->hasMany('App\Models\EulimsWithdrawal', 'inventory_transactions_id');
    } 

    public function supplier()
    {
        return $this->belongsTo('App\Models\EulimsSupplier', 'suppliers_id', 'suppliers_id');
    }
}
