<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EulimsDetail extends Model
{
    use HasFactory;

    protected $table = 'tbl_inventory_withdrawal';
    protected $primaryKey = 'inventory_withdrawal_id';
}
